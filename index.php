<?php
  session_start();
  require 'conexion.php';

    if (isset($_SESSION['user_id'])) {

        $records = $pdo->prepare('SELECT id, email, password FROM tb_usuario WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);


        $user = null;

    if (count($results) > 0) {
        $user = $results;
      }
    }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <?php if(!empty($user)): ?>
    <br> Welcome. <?= $user['email']; ?>
    <br>You are Successfully Logged In
    <a href="logout.php">
        Logout
    </a>
      <?php endif; ?>
  </body>
</html>
