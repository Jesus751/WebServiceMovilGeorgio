<?php 
require_once  './Models/CheckL.php';


class CheckList{
    private $check;

    public  function __construct()
    {
        $this-> check = new CheckLi();
    }

    function agregarCheck(){
        $nombre = $_REQUEST['nombreCheck']; 
        $tipo = $_REQUEST['tipoU'];
        $nombreItem= $_REQUEST['nombreItem'];
        $data = "(nombreCheck, tipo,nombreItem) VALUES ('$nombre', '$tipo', '$nombreItem');";
        $checkli = new CheckLi();
        $data = $checkli -> agregarCheck("checklist",$data);
        if($data){echo"Exito";}else{echo "Fallo";}
    } 
    function agregarDecriptionItem(){
        $idCheck = $_REQUEST['idche'];
        $observa = $_REQUEST['comentarios'];
        $nameimg = $_FILES ['imag']['name'];
        $archivo = $_FILES['imag']['tmp_name'];
        $nuevoNombre =  md5($nameimg);
        $path = "Images/CheckList/$nuevoNombre".".jpg";
        $subir = move_uploaded_file($archivo,$path);
        $datos =  "imagen='$nuevoNombre',observaciones='$observa'";
    }

    function editarCheck(){

    }

    function eliminarCheck(){

    }


    function consultar(){

    }
    function consultarTodosLosCheckList(){
        
    }


}




?>