


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
        <center><h3 >PARTE USUARIOS </h3></center>
                <h3>AGREGAR USUARIO</h3>
                <form action="PanelUsuarios.php" method="POST" enctype="multipart/form-data"> 
                    <input type="hidden" name="opcion" value="1">              
                    <div class="form-group">
                        <label >Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label >Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                    </div>
                    <div class="form-group">
                        <label >Correo</label>
                        <input type="email" class="form-control" id="correo"  name="correo" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label >Telefono</label>
                        <input type="number" maxlength="10" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label >Foto</label>
                        <input type="file" name="imagen" required>
                    </div>
                    <br>
                    <label>Tipo:</label>
                    <select name="tipo" id="tipo" required>
                        <optgroup label="Usuarios">
                        <option value="0">Seleccione</option>
                        <option value="administrador">Administrador</option>
                        <option value="recepcion">Recepcion</option>
                        <option value="mecanico">Mecanico</option>
                        </optgroup>
                    </select>
                    <br><br>
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
                    <input type="file" name="imagenUsu" required>
                    <div><label>    ID:   </label><input name="idUsuario" required></div>
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
                    <input type="number" name="telefono" placeholder="TELEFONO" required>
                    <input type="password" name="password" placeholder="CONTRASEÑA" required>
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
                    <input class="form-control" type="number" name="idUserr" placeholder="id" required>
                    <input class="form-control" type="text" name="nombr" placeholder="Nombre" required>
                    <input class="form-control" type="text" name="apellid" placeholder="Apellido"required>
                    <input class="form-control" type="email" name="corre" placeholder="Correo"required>
                    <input class="form-control" type="number" name="telefo" placeholder="Telefono"required>
                    <input class="form-control" type="password" name="passwor" placeholder="Password"required>
                    <input class="form-control" type="file" name="fot"required>
                    <label>Tipo:</label>
                    <select name="tip" id="tip" required>
                        <optgroup label="Usuarios">
                        <option value="0">Seleccione</option>
                        <option value="administrador">Administrador</option>
                        <option value="recepcion">Recepcion</option>
                        <option value="mecanico">Mecanico</option>
                        </optgroup>
                    </select>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <hr>
            <hr>
            <hr>
            <div>
                <h3>Eliminar usuario</h3>
            <form action="PanelUsuarios.php" method="post">
                <input type="hidden" name="opcion" value="6">
                <input type="number" name="id" required>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>    
            </div>
            <hr> 
        </div>
        <hr>
        <hr>
        <hr>
        <hr>
        <center><h3 >PARTE DE LOS ITEMS </h3></center>
        <div class="Check">
            <h3>agregar Item</h3>
            <form action="PaneltemsMecanico.php" method="post">
                <input type="hidden" name="opcion" value="1">
                <div class="form-group">
                    <label >Nombre Categoria</label>
                    <input class="form-control" type="text" name="catego" placeholder="Ejemplo:  Motor" required>
                </div>
                <label>Tipo:</label>
                    <select name="tipUsu" id="tipUsu" required>
                        <optgroup label="Usuarios">
                        <option value="0">Seleccione</option>
                        <option value="recepcion">Recepcion</option>
                        <option value="mecanico">Mecanico</option>
                        </optgroup>
                    </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr>
        <hr>
        <hr>
        <div>
            <h3>Editar Item</h3>
            <form action="PaneltemsMecanico.php" method="post">
                <input type="hidden" name="opcion" value="2">
                <input type="number" name="idit" placeholder="ID" required>
                <input type="text" name="nombeitem" placeholder="Nombre Categoria" required>
                <label>Tipo:</label>
                    <select name="tipUs" id="tipUs" required>
                        <optgroup label="Usuarios">
                        <option value="0">Seleccione</option>
                        <option value="recepcion">Recepcion</option>
                        <option value="mecanico">Mecanico</option>
                        </optgroup>
                    </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr>
        <hr>
        <hr>
        <div>
            <form action="PaneltemsMecanico.php" method="post">
                <input type="hidden" name="opcion" value="4">  
                <div><button>CONSULTAR ITEMS DISPONIBLES </button></div>
            </form>       
        </div>
        <hr>
        <hr>
        <hr>
        <div>
            <h3>Eliminar Item</h3>
            <form action="PaneltemsMecanico.php" method="post">
                <input type="hidden" name="opcion" value="3">
                <input type="number" name="idt" required placeholder="Id">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
        </div>
        <hr>
        <hr>
        <hr>
        <center><h3 >PARTE DE LOS CHECKKLIST </h3></center>
        <hr>
        <hr>
        <hr>
        <h3>Agregar Checck List</h3>
        <div>
            <?php
                $db = new PDO ('mysql:host=localhost;dbname=georgio;port=3307', "root", "admin2");
                $query = "SELECT iditem,categoria,status FROM item ORDER BY categoria ASC";
                $resultado =  $db->query($query);
            ?>

            <form action="PanelCheckList.php" method="post">
                <input type="hidden" name="opcion" value="1">
                <div class="form-group">
                    <label >Nombre CheckList</label>
                    <input class="form-control" type="text" name="nombreCheck" placeholder="Ejemplo:  Cambio de aceite del motor" required>
                    <br>
                    <select name="idcate" id="idcate" required>
                    <optgroup label="Usuarios">
                    <option value="0">Seleccione</option>
                        <?php WHILE ($row = $resultado->fetch()) {  if($row['status']=='alta'){?>

                            <option value="<?php echo $row['iditem']?>"> <?php echo $row['categoria']  ?></option>
                         <?php } } ?>
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <hr>
        <hr>
        <hr>
        <div>
        <?php
                $db = new PDO ('mysql:host=localhost;dbname=georgio;port=3307', "root", "admin2");
                $query = "SELECT iditem,categoria,status FROM item ORDER BY categoria ASC";
                $resultado =  $db->query($query);
            ?>
            <h3> EDITAR CHECKKLIST</h3>
            <form action="PanelCheckList.php" method="post">
                <input type="hidden" name="opcion" value="2">
                <input type="number" name="idiChLi" required placeholder="Id">
                <input type="text" name="nombechecLi" required placeholder="Nombre CheckLis">
                <br>
                    <select name="idcat" id="idcat" required>
                    <optgroup label="Usuarios">
                    <option value="0">Seleccione</option>
                        <?php WHILE ($row = $resultado->fetch()) {  if($row['status']=='alta'){?>

                            <option value="<?php echo $row['iditem']?>"> <?php echo $row['categoria']  ?></option>
                         <?php } } ?>
                    </select>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
        </div>
        <hr>
        <hr>
        <hr>
        <div>
            <h3> Eliminar CheckList</h3>
            <form action="PanelCheckList.php" method="post">
                <input type="hidden" name="opcion" value="3">
                <input type="number" name="idck" required placeholder="Id">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>   
        </div>
        <hr>
        <hr>
        <hr>
        <div>
            <h3> Consultar CheckLis</h3>
            <form action="PanelCheckList.php" method="post">
                <input type="hidden" name="opcion" value="4">  
                <div><button>CONSULTAR Checklis DISPONIBLES </button></div>
            </form>      
        </div>
    </div>
</body>

</html>