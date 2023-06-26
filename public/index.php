<?php 

$query = include "./bootstrap.php";

$picture = $query -> getEvents("evento");

die(var_dump($picture));



foreach ($picture as $photo) {
    echo $photo -> name. "<br />";
}

?>