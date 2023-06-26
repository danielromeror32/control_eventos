
<?php 

class QueryBuilder{

    protected $conn;

    public function __construct($conn)
    {
        $this -> conn = $conn;
    }

    public function getEvents ($table){
        // $sentence = $this -> conn -> prepare("SELECT * FROM {$table}");
        // $sentence -> execute();
        // return $sentence ->fetchAll(PDO::FETCH_CLASS);
       
    }

}


?>