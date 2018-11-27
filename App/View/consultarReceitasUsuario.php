<?php
include_once '../Controller/ControllerReceita.php';

$controllerReceita = new ControllerReceita();
?>

<div class="container">
  <?php $controllerReceita->exibeAllReceitaByUsuario($_SESSION['id_usuario']) ?>
</div>

<div class="fixed-bottom p-2">
  <div class="text-right">
    <a href="index.php?action=editarUsuario.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
  </div>
</div>
