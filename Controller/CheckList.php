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
        $idcate=  $_POST['idcate'];
        $data = "(nombre_check,id_item) VALUES ('$nombre','$idcate');";
        $checkli = new CheckLi();
        $data = $checkli -> agregarCheck("checklist",$data);
        echo($data);
        if($data){echo"Exito";}else{echo "Fallo";}
    } 

    function editarCheck(){
        $idtem = $_REQUEST['idiChLi'];
        $nombreItem = $_REQUEST['nombechecLi'];
        $idcate=  $_POST['idcat'];
        $data = "nombre_check='$nombreItem',id_item='$idcate'" ;
        echo($data);
        $checkli = new CheckLi();
        $dato = $checkli-> editarCheckList("checklist", $data, "id_check_list=$idtem");
        if($dato){ echo "exitoso"; } else {  echo "fallo";}
    }

    function eliminarCheck(){
        $iditmm = $_REQUEST['idck'];
        $checkli = new CheckLi();
        $data = $checkli->eliminarCheckList("UPDATE checklist SET estatus='baja' WHERE id_check_list=$iditmm;"); 
        if($data){ echo "exitoso"; } else { echo "fallo"; }
    }

    function consultarTodosLosCheckList(){
        $checkli = new CheckLi();
        $data = $checkli-> consultarCheckList ("checklist","estatus='alta'");
        if($data){ echo json_encode($data); } else { echo "fallo";}
    }

    function consultarUnCheckList(){
        $idcatego= $_REQUEST['idctg'];
        $checkli = new CheckLi();
        $data = $checkli-> consultarCheck ("checklist", "estatus='alta'", "id_item=$idcatego");
        if($data){ echo json_encode($data); } else { echo "fallo";}
    }

}




?>