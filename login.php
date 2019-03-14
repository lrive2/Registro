<?php
  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /Login');
  }
  require 'conexion.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $records = $pdo->prepare('SELECT id, email, password FROM tb_usuario WHERE email = :email');
        $records->bindParam(':email', $_POST['email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {

      $_SESSION['user_id'] = $results['id'];

        header("Location: index.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
  </head>


  <body>
    <div class="my-content" >
        <div class="container" >

            <div class="row">
              <div class="col-sm-12" >
                  <h1><strong>Plusis</strong> Formulario Login</h1>
                  <div class="mydescription">
                    <p>Formulario Login diseñado con Bootstrap. </p>
                  </div>
              </div>
            </div>

            <div class="row">
                  <div class="col-sm-6 col-sm-offset-3 myform-cont" >
                      <div class="myform-top">
                          <div class="myform-top-left">
                            <h3>Ingresa a nuestro sitio.</h3>
                              <p>Digita tu usuario y contraseña:</p>
                          </div>
                          <div class="myform-top-right">
                            <i class="fa fa-key"></i>
                          </div>
                      </div>
                      <div class="myform-bottom">
                        <form role="form" action="login.php" method="post" class="">
                          <div class="form-group">
                              <input type="text" name="email" placeholder="Email..." class="form-control" id="email">
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" placeholder="Contraseña..." class="form-control" id="password">
                          </div>
                          <button type="submit" value="Entrar" class="mybtn">Entrar</button>
                        </form>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src="js/jquery-3.3.1.min.js"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--<script src="js/bootstrap.min.js"></script>-->
  </body>

</html>
