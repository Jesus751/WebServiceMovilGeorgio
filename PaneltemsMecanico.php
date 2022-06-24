<?php 

require_once './Controller/ItemsMecanico.php';

if(!empty($_POST['opcion'])){
    $opcion = $_POST['opcion'];
    $check =  new CheckItems();

    switch($opcion){
        case 1:{$dato  = $check -> agregarItem();} break;
        case 2: {$dato = $check -> editarItem();} break;
        case 3: {$dato = $check -> eliminarItem();} break;
        case 4: {$dato = $check -> consultarTodosLosItems();} break;
    }
}
   

?>