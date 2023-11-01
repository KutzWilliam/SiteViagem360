<?php

class Conexao{
    public static function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
      try
        {
         $conn = new PDO("mysql:host=$servername;dbname=viagens360", $username, $password);
         // set the PDO error mode to exception  
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
        }
        catch(PDOException $e)
        {
         echo "Connection failed: ". $e->getMessage();
         return null;
         }
    }
}



?>
