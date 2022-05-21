<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <!--icon-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  </head>
  <body  style="background-color: #d1aab1;">
  
       
        <section class="vh-80" >
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-8">
                    <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black ">

                            <form action="validar.php" method="post">

                              

                                <h5 class="fw-normal mb-3 pb-3 justify-content-center" style="letter-spacing: 2px; color:#843f52; text-align: center; font-size: 30px">Iniciar sesión</h5>

                                <div class="form-outline mb-4">
                                    <input name="usuario" type="text" placeholder="Escribe tu usuario" id="form2Example17" class="form-control form-control-lg"autofocus required  />
                                    <label class="form-label" for="form2Example17">Usuario</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input name="contrasena" type="password" placeholder="Contraseña" id="form2Example27" class="form-control form-control-lg" autofocus required />
                                    <label class="form-label" for="form2Example27">Contraseña</label>
                                     <!--Alertas-->
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
                                    <!--Fin de la alerta-->
                                </div>

                                <div class="pt-1 mb-4 d-grid">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit" style="background-color: #843f52; border-color: #843f52">Ingresar</button>
                                </div>

                               
                            </form>

                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>