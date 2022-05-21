<?php include 'template/header.php' ?>

<?php
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from usuarios");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    /*print_r($usuarios);*/
?>

<div class="container mt-3">
  <!--ALERTAS-->
  <div class="row justify-content-center">
              <!--Inicio alerta-->
              <?php
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='falta'){      
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR</strong> Rellena todos los campos
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
                }
              ?>
              <!---------------------------------------------------------->
              <?php
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='registrado'){      
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>LISTO</strong> Se registraron tus datos correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
                }
              ?>
               <!-------------------------------------------------------------->
              <?php
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='error'){      
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>ERROR</strong> Vuelve a intentar.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
                }
              ?>
              <!-------------------------------------------------------------->
              <?php
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='modificado'){      
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>LISTO</strong> El usuario se ha modificado correctamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
                }
              ?>
              <!-------------------------------------------------------------->
               <?php
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='eliminado'){      
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>ELIMINADO</strong> El usuario se ha eliminado exitosamente.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
                }
              ?>
              <!-------------------------------------------------------------->
              <?php
                if(isset($_GET['mensaje'])and $_GET['mensaje']=='sesion'){      
              ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>BIENVENIDO</strong> Iniciaste sesión de forma correcta.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
                }
              ?>
        <!--Fin de la alerta-->
  </div>
  <!--CONTENIDO-->
  <div class="row justify-content-center">  
      <div class="col-md-8 mt-3 mb-3">
        
        <div class="card" >
            <div class="card-header text-white" style="background-color: #843f52;">
              Lista de usuarios
            </div>
            <div class="p-4">
              <table class="table-align-middle" >
                
                <thead>
                  
                    <tr style="color: #843f52;">
                      <th scope="col">Id</th>
                      <th scope="col">Usuario</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Contraseña</th>
                      <th scope="col">Puesto</th>
                      <th scope="col">Opciones</th>
                      <th scope="col"colspan="2"> </th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <?php
                        foreach($usuarios as $dato){

                        
                      ?>
                      <!--IMPRESION DE LOS USUARIOS-->
                      <td scope="row"><?php echo $dato->id;?></td>
                      <td><?php echo $dato->name;?></td>
                      <td><?php echo $dato->user_name;?></td>
                      <td><?php echo $dato->password;?></td>
                      <td><?php echo $dato->puesto;?></td>
                      <td><a href="editar.php?id=<?php echo $dato->id;?>"><i class=" text-success bi bi-pencil-square"></i></td>
                      <td><a onclick="return confirm('¿Estas seguro de eliminar?');" href="eliminar.php?id=<?php echo $dato->id;?>"><i class="text-danger text-center bi bi-trash3"></i></td>

                    </tr>
                    <?php
                        }
                      ?>
                  </tbody>
              </table>
              
            </div>
        </div>
      </div> <!--FIN DEL COL-MD-9-->
      <div class="col-md-4 mt-3 mb-3">
         
        <div class="card">
          <div class="card-header text-white"  style="background-color: #843f52;">
            Ingresar nuevos usarios
          </div>

                <!--FORMULARIO DONDE SE AGREGAN LOS USUARIOS, MANDA A LLAMAR A REGISTRAR.PHP--->
                <form action="registrar.php" class="p-4" method="POST">
                  <div class="mb-3">
                    <label class="form label">Usuario</label>
                    <input type="text" class="form-control" name="txtUsuario" autofocus required placeholder="Nombre de usuario">
                  </div>
                  <div class="mb-3">
                    <label class="form label">Nombre</label>
                    <input type="text" class="form-control" name="txtNombre" autofocus required placeholder="Escribe el nombre">
                  </div>
                  <div class="mb-3">
                    <label class="form label">Contraseña</label>
                    <input type="text" class="form-control" name="txtContrasena" autofocus required placeholder="Contraseña">
                  </div>
                  <div class="mb-3">
                    <label class="form label">Puesto</label>
                    <input type="text" class="form-control" name="txtPuesto" autofocus required placeholder="Ejemplo: Contabilidad">
                  </div>
                 
                  <div class="d-grid">
                    <input type="hidden" name="oculto" value="1" >
                    <input type="submit" class="btn btn-primary" value="Registrar" style="background-color: #843f52; border-color: #843f52 ">
                  </div>
                </form>
                        

        </div>
      </div> <!--FIN DEL COL-MD-4-->
  </div>  <!--FIN DEL ROW-->
</div> <!--FIN DEL CONTAINER-->
 
<?php include 'template/footer.php' ?>