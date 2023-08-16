<?php
require_once 'Security.php';
require_once 'Requests.php';
use Digistyle\Requests;

$json = json_decode(file_get_contents('php://input'), true);

if (!empty($json)) {


    $action = ($json['action']);
    switch ($action) {
        case 'login':
            $user = $json['username'];
            $pass = $json['password'];
            $result_login = Requests::login($user, $pass);
            print_r($result_login->response);
            break;
        case 'sign':
            $username=$json['user'];
            $password=$json['pass'];
            $result_sign=Requests::signup($username,$password);
            print_r($result_sign->response);

    }
}