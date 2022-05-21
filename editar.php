<?php include 'template/header.php'?>

<!--MODIFICA LOS USUARIOS YA CREADOS-->
<?php
    if(!isset($_GET['id'])){
        header('Location:index.php?mensaje=error');
        exit();
    }
   
    include_once 'model/conexion.php';
    $id = $_GET['id'];
    $sentencia = $bd->prepare("select * from usuarios where id = ?;");
    $sentencia->execute([$id]);
    $usuarios = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($usuarios);
   
?>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-4"> 
                <div class="card">
                        <div class="card-header text-white" style="background-color: #843f52; border-color: #843f52 ">
                           Modificar datos
                        </div>
                            <form action="editarProceso.php" class="p-4" method="POST">
                                <div class="mb-3">
                                    <label class="form label">Usuario</label>
                                    <input type="text" class="form-control" name="txtUsuario" autofocus required
                                        placeholder="Nombre de usuario" value="<?php echo $usuarios->user_name ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form label">Nombre</label>
                                    <input type="text" class="form-control" name="txtNombre" autofocus required
                                        placeholder="Escribe el nombre" value="<?php echo $usuarios->name ?>" >
                                </div>
                                <div class="mb-3">
                                    <label class="form label">Contraseña</label>
                                    <input type="text" class="form-control" name="txtContrasena" autofocus required 
                                        placeholder="Contraseña" value="<?php echo $usuarios->password ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form label">Puesto</label>
                                    <input type="text" class="form-control" name="txtPuesto" autofocus required 
                                        placeholder="Ejemplo: Contabilidad" value="<?php echo $usuarios->puesto ?>">
                                </div>
                                
                                <div class="d-grid">
                                    <input type="hidden" name="id" value="<?php echo $usuarios->id?>">
                                    <input type="submit" class="btn btn-primary" value="Modificar" style="background-color: #843f52; border-color: #843f52">
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>

<?php include 'template/footer.php'?>
