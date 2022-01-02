<?php

namespace Core\Classes;

abstract class App {
    private static $conn = null;
    private static $start = false;

    public static function getConn(){
        return SELF::$conn;
    }

    private static function setConn(){
        try {
            SELF::$conn = new \PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
        }catch(\PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function start(){
        if(SELF::$start === false){
            SELF::setConn();
            SELF::$start = true;
        }
    }

    public static function close(){
        SELF::$conn = null;
    }
}