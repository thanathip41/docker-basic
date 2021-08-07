<?php 
namespace Connection;
use PDO;
class DB {
    static function connection () {
        $DB_HOST = "172.17.0.1";
        $DB_USER = "root";
        $DB_PASSWORD = "password1";
        $DB_NAME= "php";
        try {
            $db = new PDO("mysql:host={$DB_HOST}; dbname={$DB_NAME}", $DB_USER, $DB_PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch(PDOEXCEPTION $e) {
            return $e;
        }
    }
}
?>