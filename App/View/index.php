<?php
session_start();
include '../../Core/Model.php';
?>

<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <?php include_once 'templates/Head.php';  ?>
  </head>
  <body>
    <header>
      <?php include_once 'templates/Header.php';  ?>
    </header>
    <section>
      <?php
      if ($_SESSION && $_SESSION['id_usuario']){
      }
    ?>
      <?php include_once $_GET['action'] ; ?>
    </section>
    <footer>
      <?php include_once 'templates/Footer.php';  ?>
    </footer>
  </body>
</html>
