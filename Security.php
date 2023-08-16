<?php


namespace Digistyle\Security;

require_once 'config.php';

use Digistyle\config;
use Exception;
use stdClass;



class Security
{

    private static $ENC_METHOD;



    private static $SECRET_IV;



    private static function configEncryption()
    {
        self::$ENC_METHOD = 'AES-256-CBC';
        self::$SECRET_IV = substr(hash('sha256', '!IV_@_$99'), 0, 16);
    }


    public static function encrypt($value, $key = '')
    {
        self::configEncryption();;
        if (!empty($key)) {
            return base64_encode(openssl_encrypt($value, self::$ENC_METHOD, $key, 0, self::$SECRET_IV));
        }

        return base64_encode(openssl_encrypt($value, self::$ENC_METHOD, KEYS::$encryptionKey, 0, self::$SECRET_IV));
    }


    public static function decrypt($value, $key = '')
    {
        self::configEncryption();;
        if (!empty($key)) {
            return openssl_decrypt(base64_decode($value), self::$ENC_METHOD, $key, 0, self::$SECRET_IV);
        }

        return openssl_decrypt(base64_decode($value), self::$ENC_METHOD, KEYS::$encryptionKey, 0, self::$SECRET_IV);
    }



    public static function initCSRF($key)
    {
        if (!isset($_SESSION[$key])) {
            try {
                $_SESSION[$key] = bin2hex(random_bytes(32));
            } catch (Exception $e) {
            }
        }
        return $_SESSION[$key];
    }



    public static function verifyCSRF($key, $token)
    {
        if (isset($_SESSION[$key])) {
            if ($token && $token === $_SESSION[$key]) {
                return true;
            }
        }
        return false;
    }



    public static function passwordValidator($password)
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $length = strlen($password);

        if ($length < 8) {
            $response = self::sendResponse(0, "Password must be at least 8 characters.");
        } elseif (!$uppercase) {
            $response = self::sendResponse(0, "Password must contain one uppercase.");
        } elseif (!$lowercase) {
            $response = self::sendResponse(0, "Password must contain one lowercase.");
        } elseif (!$number) {
            $response = self::sendResponse(0, "Password must contain one number.");
        } else {
            $response = self::sendResponse(200, "All rules observed.");
        }

        return $response;
    }


    public static function emailValidator($email)
    {
        $response = self::sendResponse(0, "Email address is invalid.");
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $response = self::sendResponse(200, "Email address is valid.");
        }
        return $response;
    }


    public static function phoneNumberValidator($mobile)
    {
        $response = self::sendResponse(0, "Phone number is invalid.");
        if (preg_match('/^[0-9]{10}+$/', $mobile)) {
            $response = self::sendResponse(200, "Phone number is valid.");
        }
        return $response;
    }


    private static function sendResponse(...$opts)
    {
        $response = new stdClass();
        $response->status = $opts[0];
        $response->message = $opts[1];
        if (isset($opts[2])) {
            $response->response = $opts[2];
        }
        return $response;
    }

}
