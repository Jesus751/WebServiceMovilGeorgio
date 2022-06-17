<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title> PREBAS </title>
</head>
<body>
    <div class="container">
        <div class="Usur">
            <hr>
            <hr>
            <hr>
        <div>
                <h3>AGREGAR USUARIO</h3>
                <form action="PanelUsuarios.php" method="POST" enctype="multipart/form-data"> 
                    <input type="hidden" name="opcion" value="1">              
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label >Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                    </div>
                    <div class="form-group">
                        <label >Correo</label>
                        <input type="email" class="form-control" id="correo"  name="correo" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label >Telefono</label>
                        <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
                    </div>
                    <div class="form-group">
                        <label >Foto</label>
                        <input type="file" name="imagen">
                    </div>
                    <div class="form-group">
                        <label >Tipo</label>
                        <input type="text" class="form-control" id="tipo" placeholder="Tipo" name="tipo">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <hr>
            <hr>
            <hr>
            <div>
                <form enctype="multipart/form-data" action="PanelUsuarios.php" method="POST">
                    <h3>SUBIR FOTO USUARIO</h3>
                    <input type="hidden" name="opcion" value="2">
                    <input type="file" name="imagenUsu">
                    <div><label>    ID:   </label><input name="idUsuario" ></div>
                    <input type="submit" class="btn btn-primary" value="Subir archivo"/>
                </form>
            </div>
            <hr>
            <hr>
            <hr>
            <div>
                <form action="PanelUsuarios.php" method="post">
                    <input type="hidden" name="opcion" value="3">  
                    <div><button>CONSULTAR USUARIOS </button></div>
                </form>
            </div>
            <hr>
            <hr>
            <hr>
            <div>
                <h3>VALIDAR USUARIO</h3>
                <form action="PanelUsuarios.php" method="post">
                    <input type="hidden" name="opcion" value="4">
                    <input type="number" name="telefono" placeholder="TELEFONO">
                    <input type="password" name="password" placeholder="CONTRASEÑA">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <hr>
            <hr>
            <hr>
            <div>
                <h3>EDITAR USUARIO</h3>
                <form action="PanelUsuarios.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="opcion" value="5">
                    <input class="form-control" type="number" name="idUserr" placeholder="id">
                    <input class="form-control" type="text" name="nombr" placeholder="Nombre">
                    <input class="form-control" type="text" name="apellid" placeholder="Apellido">
                    <input class="form-control" type="email" name="corre" placeholder="Correo">
                    <input class="form-control" type="number" name="telefo" placeholder="Telefono">
                    <input class="form-control" type="password" name="passwor" placeholder="Password">
                    <input class="form-control" type="file" name="fot">
                    <input class="form-control" type="text" name="tip" placeholder="Tipo">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <hr>
            <hr>
            <hr>
            <div>
                <h3>Cambiar estado usuario</h3>
            <form action="PanelUsuarios.php" method="post">
                <input type="hidden" name="opcion" value="6">
                <input type="number" name="id">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>    
            </div>
            <hr> 
        </div>
        <hr>
        <hr>
        <div class="Check">
            <h3>AGREGAR CHECK LIST</h3>
            <form action="PanelCheckList.php" method="post">
                <input type="hidden" name="opcion" value="1">
                <input class="form-control" type="text" name="nombreCheck" placeholder="Ejemplo: Carroseria e Interiores  ">
                <input class="form-control" type="text" name="tipoU" placeholder="Ejemplo: Mecanico">
                <input class="form-control" type="text" name="nombreItem" placeholder="Ejemplo: Costado Derecho">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr>
        <hr>
        <hr>
        <div>
            <h3>AGREGAR DESCRIPCION/COMENTARIO  && FOTO</h3>
            <form action="PanelCheckList.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="opcion" value="4">
                <input type="number" name="idche" placeholder="ID">
                <input class="form-control" type="text" name="comentarios" placeholder="OBSERVACIONES">
                <input type="file" name="imag">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr>
        <hr>
        <hr>
    </div>
</body>

</html>