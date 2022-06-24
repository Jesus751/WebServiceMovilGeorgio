<?php 


require_once  './Models/Items_Meca.php';


class CheckItems{ 
     
    private $check;

    public  function __construct()
    {
        $this-> check = new Mecani();
    }

    function agregarItem(){
        $categotia = $_REQUEST['catego']; 
        $tipo = $_REQUEST['tipUsu'];
        $data = "(categoria,tipo) VALUES ('$categotia','$tipo');";
        $item = new Mecani();
        $data = $item -> agregaritemm("item",$data);
        if($data){echo"Exito";}else{echo "Fallo";}
    } 

    function editarItem(){
        $idtem = $_REQUEST['idit'];
        $nombreItem = $_REQUEST['nombeitem'];
        $tipo = $_REQUEST['tipUs'];
        $data = "categoria='$nombreItem',tipo= '$tipo'" ;
        echo($data);
        $item = new Mecani();
        $dato = $item-> editaritemm("item", $data, "iditem=$idtem");
        if($dato){ echo "exitoso"; } else {  echo "fallo";}
    }

    function eliminarItem(){
        $iditmm = $_REQUEST['idt'];
        $item = new Mecani();
        $data = $item->eliminar("UPDATE item SET status='baja' WHERE iditem=$iditmm;"); 
        if($data){ echo "exitoso"; } else { echo "fallo"; }
    }
    function consultarTodosLosItems(){
        $item = new Mecani();
        $data = $item-> consultaItems ("item","status='alta'");
        if($data){ echo json_encode($data); } else { echo "fallo";}
    }

}




?>