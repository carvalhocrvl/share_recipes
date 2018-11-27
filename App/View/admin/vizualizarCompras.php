<?php
include_once '../Controller/ControllerCompra.php';

$controllerCompra = new ControllerCompra();
?>

<div class="container">
  <?php $controllerCompra->exibeAllCompra() ?>
  <hr>
</div>

<div class="fixed-bottom p-2">
  <div class="text-right">
    <a href="index.php?action=admin/index_admin.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
  </div>
</div>
