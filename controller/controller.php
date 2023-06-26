<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados desde el formulario
    $id = $_POST['id'];
    $name = $_POST['name'];
    $startDate = $_POST['startDate'];
    $finishDate = $_POST['finishDate'];
    $observations = $_POST['observations'];
    

    $data = array(
        "id" => $id,
        "name" => $name,
        "startDate" => $startDate,
        "finishDate" => $finishDate,
        "observations" => $observations

    );

    // print_r($data);
    
    // foreach ($data as $key => $value) {
    //     echo $value;
    // }


  
    include_once '../model/table_model.php';
    $setArray = new Model();
    $setArray -> saveDB($data);
    
   
    // header('Location: otra_pagina.php');
    // exit;
}

?>