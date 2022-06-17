<?php

    class Conexi{
        public $host;
        public $user;
        public $pass;
        public $dbname;
        public $con;

        public function __construct()
        {
            $this-> host = "localhost";
            $this-> user = "root";
            $this-> pass = "";
            $this-> dbname= "georgio";
            $this-> con = new mysqli($this->host,$this-> user, $this-> pass, $this-> dbname);
            if ($this->con->connect_error){
                echo " Fallo la conexion";
            }else{
                echo "Conexion exitosa";
            }
        } 
    }

$CONECT= new Conexi();
?>