<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    class MySql{
        private static $pdo = null;
        // public static ?string $query = null;
        public static function check($query = null){
            if(!isset($query)){
                return false;
            }
            self::$pdo = new PDO("mysql:host=127.0.0.1:3307; dbname=quanlibaihat", "root", "140103");
            $result = self::$pdo->prepare($query);
            $result->execute();
            $numberEffect = $result->rowCount();
            $pdo = null;
            if($numberEffect > 0){
                return true;
            }
            return false;
        }
        public static function Update(string $sql){
            self::$pdo = new PDO("mysql:host=127.0.0.1:3307; dbname=quanlibaihat", "root", "140103");
            $result = self::$pdo->prepare($sql);
            $result->execute();
            $numberEffect = $result->rowCount();
            $pdo = null;
            if($numberEffect > 0) {
                return true;
            }
            return false;
        }

        public static function select($query = null) {
            if(!isset($query)){
                return false;
            }
            self::$pdo = new PDO("mysql:host=127.0.0.1:3307; dbname=quanlibaihat", "root", "140103");
            $result = self::$pdo->prepare($query);
            $result->execute();
            $numberEffect = $result->rowCount();
            if($numberEffect > 0) {
                return $result->fetchAll();
            }
            else{
                $pdo = null;
                return false;
            }
            

        }
        
        public static function Delete($query = null){
            if($query == null){
                return false;
            }
            self::$pdo = new PDO("mysql:host=127.0.0.1:3307; dbname=quanlibaihat", "root", "140103");
            $result = self::$pdo->prepare($query);
            $result->execute();
            $numberEffect = $result->rowCount();
            if($numberEffect > 0) {
                return true;
            }
            return false;
        }

        public static function Insert($query = null){
            if($query == null){
                return false;
            }
            self::$pdo = new PDO("mysql:host=127.0.0.1:3307; dbname=quanlibaihat", "root", "140103");
            $result = self::$pdo->prepare($query);
            $result->execute();
            $numberEffect = $result->rowCount();
            if($numberEffect > 0) {
                return true;
            }
            return false;
        }
    }
?>