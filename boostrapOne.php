<?php 

include "../database/connection.php";
include "../dataBase";
$config = include "../config.php";

// // $conn = Connection::make();
return new QueryBuilder(Connection::make($config["database"]));



?>