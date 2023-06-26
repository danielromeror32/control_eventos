<?php 

class ConnectionTest {

    public static function make ($config ) {
        // $serverName = "127.0.0.1";
        // $username = "root"; 
        // $password = "";
        try {
            
            return mysqli_connect(
                $config["connection"] , $config["username"],$config["password"],$config["name"]
            );
            // return mysqli_connect("localhost", "root", "", "eventos");
            
            
        } catch (mysqli_sql_exception $e) {
            die('Error al conectar con la base de datos: ' . $e->getMessage());
        }
    }
    
}
?>