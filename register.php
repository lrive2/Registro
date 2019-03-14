<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Login</title>

    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" >
    <link rel="stylesheet" href="css/custom.css">

  </head>

  <body>
    <div class="my-content" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-12" >
                  <h1><strong>Plusis</strong> Formulario de Registro</h1>
                  <div class="mydescription">
                    <p>Formulario de Registro diseñado con Bootstrap. </p>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                    <div class="myform-top">
                        <div class="myform-top-left">
                          <h3>Regístrate en nuestro sitio.</h3>
                            <p>Por favor ingresa tus datos personales:</p>
                        </div>
                        <div class="myform-top-right">
                          <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <div class="myform-bottom">
                      <form role="form" action="guardar.php" method="post" class="form-registro">
                        <div class="form-group">
                            <input type="text" name="nombre" placeholder="Nombres..." class="form-control" id="nombre">
                        </div>

                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email..." class="form-control" id="email">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Contraseña..." class="form-control" id="password">
                        </div>

                        <button type="submit" class="mybtn" name="registrarme">Registrarme</button>
                      </form>
                      <div id="msg_error" class="alert alert-danger" role="alert" style="display: none"></div>
                    </div>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mysocial-login">
                    <h3>...ingresa también por:</h3>
                    <div class="mysocial-login-buttons" >
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-facebook"></i> Facebook
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-twitter"></i> Twitter
                      </a>
                      <a class="mybtn-social" href="#">
                      <i class="fa fa-google-plus"></i> Google Plus
                      </a>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <!-- Enlazamos el js de Bootstrap, y otros plugins que usemos siempre al final antes de cerrar el body -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src="js/jquery-3.3.1.min.js"></script>-->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
  </body>
</html>
