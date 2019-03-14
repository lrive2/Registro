<?php
        require 'conexion.php';

      $message = '';

      if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['password'])) {

          $sql = "INSERT INTO tb_usuario (nombre, email, password) VALUES (:nombre, :email, :password)";

          $stmt = $pdo->prepare($sql);
          $stmt->bindParam(':nombre', $_POST['nombre']);
          $stmt->bindParam(':email', $_POST['email']);

          $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

          $stmt->bindParam(':password', $password);

      if ($stmt->execute()) {

          $message = 'Successfully created new user';

        } else {

          $message = 'Sorry there must have been an issue creating your account';
        }
      }


 ?>
