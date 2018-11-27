<?php
include 'templates/Head.php';
?>

<div class="container">
  <div class="row">
    <h3>Usuário</h3>
  </div>
  <hr>
  <a href="index.php?action=admin/consultarUsuarios.php">Listar Usuários</a>

<br>
<br>
  <div class="row">
    <h3>Receitas</h3>
  </div>
  <hr>

  <a href="index.php?action=admin/consultarReceitas.php">Consultar Receitas</a>

<hr>
<div class="text-center">
  <a href="index.php?action=exibeReceitas.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
</div>

<script type="text/javascript" src="styles/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="styles/js/bootstrap.js"/></script>
