<?php 
include "../model/table_model.php";

$arrayEvent = Model::query();


include "../controller/controller.php"


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/styles.css" />
    
</head>
<body>
    
<div   div class="main-container">

<div class="container-table">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre de evento</th>
            <th scope="col">Fecha de inicio</th>
            <th scope="col">Fecha de finalización</th>
            <th scope="col">Observaciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <?php foreach ($arrayEvent as $fila): ?>
            <th scope="row">1</th>
            <td><?php echo $fila["nombre"] ?></td>
            <td><?php echo $fila["fechaInicio"] ?></td>
            <td><?php echo $fila["fechaTermino"] ?></td>
            <td><?php echo $fila["observaciones"] ?></td>
          </tr>
          <?php endforeach; ?>
         
        </tbody>
      </table>
</div>
<div class="container-form">
    <form id="form" method="POST">
        <div class="mb-3">
            <label for="text" class="form-label">ID</label>
            <input type="text" class="form-control input-data" name="id" aria-describedby="emailHelp" >
          </div>
    
        <div class="mb-3">
            <label for="text" class="form-label">Nombre</label>
            <input type="text" class="form-control input-data" name="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ingrese nombre del evento.</div>
          </div>
        <div class="mb-3">
            <label for="text" class="form-label">Fecha de inicio</label>
            <input type="text" class="form-control input-data" name="startDate" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ingrese la fecha de inicio.</div>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Fecha de finalización</label>
            <input type="text" class="form-control input-data" name="finishDate" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ingrese la fecha de termino.</div>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Observaciones</label>
            <input type="text" class="form-control input-data" name="observations" aria-describedby="emailHelp">
        </div>
        
        
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary btnAdding">Agregar</button>
      </form>
</div>

</div>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./index.js"></script>
</html>
