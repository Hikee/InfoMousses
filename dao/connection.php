<?php
   	class Connection{
   		public static $db;

   		private static function doConnection(){
   			if(!isset(self::$db) ){
   				try {
                  $host    = "localhost";
                  $db_name = "infomusses";
                  $user    = "root";
                  $pass    = "";
   					self::$db = new PDO("mysql:host=$host;dbname=$db_name", $user,$pass);
   					self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   					self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   				} catch (PDOException $e) {
   					echo "CONNECTION ERRO".$e->getMessage();
   				}
   			}

   			return self::$db;
         }
   		//ISSO AQUI NUM  TEM NADA A VER
   		public static function prepare($sql){
   			return self::doConnection()->prepare($sql);
   		}

   	}
