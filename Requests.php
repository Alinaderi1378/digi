<?php

namespace Digistyle;
require_once 'DB.php';
require_once 'Security.php';

use Digistyle\Security\Security;
use stdClass;

class Requests
{
    private static function sendResponse(...$opts)
    {
        $response = new stdClass();
        $response->status = $opts[0];
        $response->message = $opts[1];
        if (isset($opts[2])) {
            $response->response = $opts[2];
        } elseif (isset($opts[3])) {
            $response->error = $opts[3];
        }
        return $response;
    }
    public static function selectcart($id_product){
        $response = self::sendResponse(0, "");
        $sql = "SELECT * FROM cart WHERE product_id=:id_product;";
        $params = ["id_product" => $id_product];
        $result = DB::rawQuery($sql, $params);
        if ($result->status = 200) {
            $response = self::sendResponse(200, "", $result->response);
        }

        return $response;
    }
    public static function insrtcart($id_product,$quantity){
        $response = self::sendResponse(0, "");
        $sql = "INSERT INTO cart( product_id, quantity) VALUES (:product,:quantity);";
        $params = ["product" => $id_product,"quantity"=>$quantity];
        $result = DB::insert($sql, $params);
        if ($result->status = 200) {
            $response = self::sendResponse(200, "ok", $result->response);
        }

        return $response;
    }

    public static function selectproducts()
    {
        $response = self::sendResponse(0, "");
        $sql = "SELECT * FROM products ;";
        $result = DB::rawQuery($sql);
        if ($result->status = 200) {
            $response = self::sendResponse(200, "", $result->response);
        }

        return $response;
    }
    static function login($username,$password){
        $num = Security::encrypt($password, config::$encryptionKey);
        $response = self::sendResponse(0, "");
        $sql = "SELECT COUNT(*) AS num ,id_user FROM tbl_user WHERE username_user=:username AND password_user=:password";
        $params = ["password" => $num,"username"=>$username];
        $result = DB::rawQuery($sql, $params);
        if ($result->response[0]->num == 1 ) {
            /*
            $UIN = Security::encrypt($result->response[0]->id_user, config::$encryptionKey);
            setcookie("UPN", $num, USER_ORDER, "./");
            setcookie("UIN", $UIN,  USER_ORDER, "./");
*/

            $response = self::sendResponse(200, "ok", $result->response[0]->id_user);
        } else {
            $response = self::sendResponse(200, "feild", 0);
        }


        return $response;
    }
    public static function userInformation($id_user)
    {
        $response = self::sendResponse(0, "");
        $sql = "SELECT * FROM tbl_user WHERE id_user= :id_user ;";
        $param = ["id_user" => $id_user];
        $result = DB::rawQuery($sql, $param);
        if ($result->status == 200) {
            $user = [];
            foreach ($result->response as $item) {
                $item_v = new stdClass();
                $item_v->name = $item->name_user;
                $item_v->phone = $item->phone_user;
                $item_v->email = $item->email_user;
                array_push($user, $item_v);
            }
            $response = self::sendResponse(200, "", $user);
        }
        return $response;
    }
    public static function signup($username,$password){
        $password1 = Security::encrypt($password, config::$encryptionKey);
        $response = self::sendResponse(0, "");
        $sql = "SELECT COUNT(*) AS num ,id_user FROM tbl_user WHERE username_user=:username";
        $params = ["username"=>$username];
        $result = DB::rawQuery($sql, $params);
        if ($result->response[0]->num < 1 ) {
            $sql = "INSERT INTO tbl_user(username_user,password_user) VALUES (:username,:password)";
            $params = ["username" => $username, "password" => $password1];
            $result = DB::insert($sql, $params);
            $resItem = self::login($username, $password1);

            $response = self::sendResponse(200, "ok", $resItem->response+1);
        } else {
            $response = self::sendResponse(200, "این یوزرنیم یا پسورد قبلا وجود داشته است", 0);
        }
        return $response;
    }

}