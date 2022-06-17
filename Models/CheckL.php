<?php 

class CheckLi{
    private $check;
    private $db;

    public function __construct()
    {
        $this-> check = array();
        $this->db = new PDO('mysql:host=localhost;dbname=georgio', "root", "");
    }

    public function agregarCheck($tabla, $data){
        $con = "INSERT INTO " .$tabla." ". $data ."";
        $res = $this->db->query($con); 
        echo($con);
        if ($res) {return true;}else{return false;}
    }

    public function agregarDecriptionFotoItem($update){
        $con = $update;
        $res = $this->db->query($con);
        if ($res) {return true;  } else { return false; }
    }

}



?>