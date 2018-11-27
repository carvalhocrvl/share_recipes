<?php
include_once '../Controller/ControllerReceita.php';

$controllerReceita = new ControllerReceita();
$receita = $controllerReceita->getReceitaById($_GET['id_receita']);
?>

<div class="container">
  <div class="row">
    <h3><?php echo $receita['nome'];?></h3>
  </div>
  Criador: <?php echo $receita['nome_usuario'];?>
  <hr>
      <h4>Ingredientes: </h4>
      <?php echo  nl2br($receita['ingredientes']);?>
    <br>
      <h4>Preparo:</h4>
      <?php echo nl2br($receita['preparo']);?>
    </div>
    <br>
  <hr>
</div>

<div class="text-center">
  <a href="index.php?action=exibeReceitas.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
</div>
