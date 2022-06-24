<?php 
require_once './Models/Usuarios.php';

class Usuarios {
    private $user;

    public function __construct (){
        $this -> user = new Usuario();
    }

   function guardarUsuario (){
        $nom =  $_REQUEST['nombre'];
        $ape = $_REQUEST['apellido'];
        $cor =  $_REQUEST['correo'];
        $tel= $_REQUEST['telefono'];
        $pas= $_REQUEST['password'];
        $nombreimg= $_FILES['imagen']['name'];
        $archivo = $_FILES['imagen']['tmp_name'];
        $nuevoNombre= md5($nombreimg);
        $path = "Images/Usuarios/$nuevoNombre".".jpg";
        move_uploaded_file($archivo,$path);
        $tip= $_REQUEST['tipo'];
        $data = "(nombre,apellido,correo,telefono,password,foto,tipo) VALUES ('$nom','$ape','$cor','$tel','$pas', '$nuevoNombre','$tip');";
        $usuario = new Usuario();
        $data = $usuario -> insetarUsuario("usuarios_movil", $data);
        if ($data) { echo "exitoso"; } else { echo "fallo"; }
    }

    function subirFotoUsuario(){
        $nombreimg= $_FILES['imagenUsu']['name'];
        $archivo = $_FILES['imagenUsu']['tmp_name'];
        $nuevoNombre= md5($nombreimg);
        $idUsu =  $_REQUEST['idUsuario'];
        $path = "Images/Usuarios/$nuevoNombre".".jpg";
        $subir = move_uploaded_file($archivo,$path);
        $actualpath = "C:\xampp\htdocs\WebServiceGeorgioMovil\Images\Usuarios";
        if(!empty($subir)){
            $usuario = new Usuario();
            $data = $usuario -> ActualizarUsuario ("usuarios_movil", "foto='$nuevoNombre'", "idUsuario_movil=$idUsu");
            if($data){echo "Actualizado";}else {echo "Fallo";}
        }else{echo "Fallo al subir la imagen";}
    }

    function consultarUsuarios(){
        $usuario = new Usuario();
        $data = $usuario-> ConsultaUsuarios ("usuarios_movil","status='alta'");
        if($data){ echo json_encode($data); } else { echo "fallo";}
    }

    function validarUsuario () {
        $tel = $_REQUEST['telefono'];
        $pas = $_REQUEST['password'];
        $usuario = new Usuario();
        $data = $usuario-> ConsultaUsuarios ("usuarios_movil","password='$pas' AND telefono='$tel'");
        if($data){ echo json_encode($data); } else { echo "fallo"; }
    }

    function editarUsuario(){
        $idUser = $_REQUEST['idUserr'];
        $nombre =  $_REQUEST['nombr'];
        $apellido = $_REQUEST['apellid'];
        $correo =  $_REQUEST['corre'];
        $telefono= $_REQUEST['telefo'];
        $password= $_REQUEST['passwor'];
        $foto = $_FILES['fot']['name'];
        $archivo = $_FILES['fot']['tmp_name'];
        $nuevoNombre= md5($foto);+
        $path = "Images/Usuarios/$nuevoNombre".".jpg";
        move_uploaded_file($archivo,$path);
        $tipo = $_REQUEST['tip'];
        $data = "nombre='$nombre',apellido='$apellido',correo='$correo',telefono='$telefono',password='$password',foto='$nuevoNombre',tipo='$tipo'";
        echo($data);
        $usuario = new Usuario();
        $dato = $usuario-> editarUsuario("usuarios_movil", $data, "idUsuario_movil=$idUser");
        if($dato){ echo "exitoso"; } else {  echo "fallo"; }
    }

    function cambiarStatusUsuariobaja(){
        $idUser = $_REQUEST['id'];
        $usuario = new Usuario();
        $data = $usuario->Actualizar("UPDATE usuarios_movil SET status='baja' WHERE idUsuario_movil=$idUser;"); 
        if($data){ echo "exitoso"; } else { echo "fallo"; }
    }
    function cambiarStatusUsuarioalta(){
        $iduser = $_REQUEST['idUserBaja'];
        $usuario = new Usuario();
        $data = $usuario->Actualizar("UPDATE usuarios_movil SET status='alta' WHERE idUsuario_movil=$iduser;"); 
        if($data){ echo "exitoso"; } else { echo "fallo"; }

    }
}

?>