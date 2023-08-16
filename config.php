<?php
namespace Digistyle;
define('USER_ORDER', time()+24*60*60);

class config
{
    public static $host = 'localhost';
    public static $dbName = 'digi_db';
    public static $dbUserName = 'root';
    public static $dbPassword = '';

    public static $encryptionKey = 'digistyle_admin';
}