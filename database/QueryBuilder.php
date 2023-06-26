
<?php 

class QueryBuilder{

    protected $conn;

    public function __construct($conn)
    {
        $this -> conn = $conn;
    }

    public function getEvents ($table){
      
        $sentence = "SELECT * FROM {$table}";
        $query = $this -> conn ->query($sentence);
        if (!$query) {
            die('Error al ejecutar la consulta: ' . $this -> conn ->error);
        }

        $datos = array();

        while ($fila = $query->fetch_assoc()) {
            $datos[] = $fila;
        }

        $query->free();
        mysqli_close($this -> conn);
        return $datos;

       
    }

}


?>