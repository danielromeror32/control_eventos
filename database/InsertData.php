
<?php 

class QueryBuilder{

    protected $conn;
    protected $id;
    protected $name;
    protected $startDate;
    protected $finishDate;
    protected $observations;

    public function __construct($conn, $id, $name, $startDate, $finishDate, $observations)
    {
        $this -> conn = $conn;
        $this -> id = $id;
        $this -> name = $name;
        $this -> startDate = $startDate;
        $this -> finishDate = $finishDate;
        $this -> observations = $observations;

    }

    public function setEvents ($table){
     

        $sql = "INSERT INTO $table (idEvento, nombre, fechaInicio, FechaTermino, observaciones) 
        VALUES (?, ?, ?, ?, ?)";
        $consulta = mysqli_prepare($this -> conn, $sql);

        mysqli_stmt_bind_param($consulta, "issss", $id, $name, $startDate, $finishDate, $observations);

        mysqli_stmt_execute($consulta);
        mysqli_stmt_close($consulta);
       
       
        if (!$consulta) {
            die('Error al ejecutar la consulta: ' . $this -> conn ->error);
        }

        // $datos = array();

        // while ($fila = $query->fetch_assoc()) {
        //     $datos[] = $fila;
        // }

        // $query->free();
        // return $datos;
        
       
    }

}




?>