<?php
   $user = $_GET['user'];
   $password = $_GET['password'];

   if (($user == "usuario") AND ($password == "12345")) {
      echo "Bienvenido ".$user;
   } else {
      echo "�Usuario o contrase�a incorrectos!";
      echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
   }
?>