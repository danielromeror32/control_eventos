<?php 

include "./dataBase/connection.php";
include "./DataBase/QueryBuilder.php";
$config = include "./config.php";

// $conn = Connection::make();
return new QueryBuilder(Connection::make($config["database"] ));

?>