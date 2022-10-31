<?php

    class Database{
        private static $server = "localhost";
        private static $login = "root";
        private static $mdp ="";
        private static $connexion = null;

        public static function connect(){
          try{
                self::$connexion = new PDO("mysql:host=".self::$server.";dbname=demo",self::$login, self::$mdp);
                self::$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            
            catch(PDOException $e){
                echo 'Probleme de connexion à la base de donnée :'. $e->getMessage();
            }
            return self::$connexion;
        }  
        public static function disconnect(){
            self::$connexion = null;
        }
        
    }
    Database::disconnect();


/*
    try {
        $db_co = new PDO('mysql:host=localhost;dbname=deo','root','');

        $db_co->exec("SET NAMES utf8");

    } catch (PDOException $e) {
        die($e-> getMessage());
    }require("../connex.php");
*/




   
?>