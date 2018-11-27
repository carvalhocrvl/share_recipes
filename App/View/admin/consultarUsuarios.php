<?php
include 'templates/Head.php';
require_once '../Controller/ControllerUsuario.php';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->deleteUsuario();

?>

<div class="container">
  <div class="card">
    <div class="card-body">
      <?php
      $controllerUsuario->getAllUsuario();
      ?>
    </div>
  </div>
  <hr>
</div>

<div class="text-center">
  <a href="index.php?action=admin/index_admin.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
</div>
