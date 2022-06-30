<?php 

class Mecani{
    private $check;
    private $db;

    public function __construct()
    {
        $this-> check = array();
        $this->db = new PDO('mysql:host=localhost;dbname=georgio;port=3306', "jesus", "georgio21" );
    }

    public function agregaritemm($tabla, $data){
        $con = "INSERT INTO " .$tabla." ". $data ."";
        $res = $this->db->query($con); 
        echo($con);
        if ($res) {return true;}else{return false;}
    } 
    public function editaritemm($tabla, $data, $condicion){
        $consulta  = "UPDATE ".$tabla." SET ". $data ." WHERE ".$condicion;
        $resultado = $this->db->query($consulta);
        echo($consulta);
        if ($resultado) { return true; } else { return false; }
    }
    
    public function eliminar($update){
        $con = $update;
        $res = $this->db->query($con);
        if ($res) {return true;  } else { return false; }
    }

    public function consultaItems($tabla,$condicion){
        $con = "SELECT * FROM ".$tabla." WHERE ".$condicion.";";
        $res = $this->db->query($con);
        while($filas = $res->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->check['Consulta'] = $filas;
        }
        return $this->check;
    }

    public function consultarItem($tabla, $condicion, $condicon2){
        $con = "SELECT * FROM ".$tabla." WHERE ".$condicion." AND ".$condicon2.";";
        $res = $this->db->query($con);
        while($filas = $res->FETCHALL(PDO::FETCH_ASSOC)) {
            $this->check['Consulta'] = $filas;
        }
        return $this->check;
    }

}



?>