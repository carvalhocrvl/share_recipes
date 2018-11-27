<?php
session_start();
include_once '../../Core/Model.php';
include_once '../Controller/ControllerUsuario.php';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->validaUsuario();

?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gamer Store</title>
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/fontawesome/css/all.css">
    <link rel="stylesheet" href="styles/css/styles.css">
    <style>
    body{
      padding-top: 12em;
      font-family: ubuntu, sans-serif;
    }
    </style>
  </head>
  <body>
    <div class="fixed-top" style="top: 1em; right: 1em">
      <a href="index.php?action=exibeReceitas.php" class="btn btn-sm btn-outline-danger float-right"><i class="far fa-arrow-alt-circle-left"></i> Voltar à Página Inicial</a>
    </div>
    <div class="login-popup-wrap new_login_popup">
      <div class="login-popup-heading text-center">
        <h1><i class="fas fa-2x fa-cookie-bite"></i><br>Share Recipes</h1>
      </div>

      <form id="loginMember" role="form" action="" method="post">
        <div class="form-group">
          <input type="text" class="form-control" style="border-color: #000" id="user_id" placeholder="E-mail" name="email" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control"  style="border-color: #000" id="password" placeholder="Senha" name="senha" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-dark" style="width: 270px;" name="login" value="login">Login</button>
        </div>
      </form>

      <br>
      <div class="text-center">Não possui conta ainda?<a style="color: #343a40; text-decoration-line: underline" href="index.php?action=cadastrarUsuario.php"> Clique aqui</a></div>
    </div>
    <script type="text/javascript" src="styles/js/jquery-3.3.1.min.js"></script>
  </body>
</html>
