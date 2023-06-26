<?php 

class Connection {

    public static function make ($config ) {
        // $serverName = "127.0.0.1";
        // $username = "root"; 
        // $password = "";
        try {
            //return new PDO("mysql:host=$serverName;dbname=album", $username, $password);
            
            return mysqli_connect(
                $config["connection"] . ";dbname=" . $config["name"],
                $config["username"], $config["password"], $config["options"]
            );
            
            
        } catch (mysqli_sql_exception $e) {
            die('Error al conectar con la base de datos: ' . $e->getMessage());
        }
    }
    
}
?>