<?php
require_once './Controller/Usuarios.php';

if(!empty($_POST['opcion'])){
    $opcion = $_POST['opcion'];
    $user =  new Usuarios();

    switch($opcion){
        case 1:{ $dato = $user-> guardarUsuario(); };break;
        case 2:{ $dato = $user-> subirFotoUsuario(); };break;
        case 3:{ $dato = $user-> consultarUsuarios(); };break;
        case 4:{ $dato = $user-> validarUsuario(); };break;
        case 5:{ $dato = $user-> editarUsuario(); };break;
        case 6:{ $dato = $user-> cambiarStatusUsuario(); };break;  
    }


}








?>