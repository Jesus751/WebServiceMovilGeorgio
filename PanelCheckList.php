<?php 

require_once './Controller/CheckList.php';

if(!empty($_POST['opcion'])){
    $opcion = $_POST['opcion'];
    $check =  new CheckList();

    switch($opcion){
        case 1:{$dato  = $check -> agregarCheck();}; break;
        case 2: {$dato = $check -> editarCheck();}; break;
        case 3: {$dato = $check -> eliminarCheck();}; break;
        case 4: {$dato = $check -> consultarTodosLosCheckList();}break;
    } 

}
   

?>