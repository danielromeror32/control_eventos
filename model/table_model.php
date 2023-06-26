<?php 

// $query = include "../bootstrap.php";

// return $events = $query -> getEvents("evento");

//die(var_dump($events));



// function arrayEvent ($events){
//     foreach ($events as $event) {
//         echo $event["nombre"] . "<br>"; // Imprimir nombre con salto de línea
//     }
// }

// return arrayEvent($events);

class Model {

    public static function query (){
        $query = include "../bootstrap.php";

        return $events = $query -> getEvents("evento");
    }

    public function saveDB ($data){

        $array = $data;


        $query = include "../boostrapOne.php";
        $query -> setEvents($data["id"], $data["name"], $data["startDate"],$data["finishDate"] ,$data["observations"] );

    }

}


?>