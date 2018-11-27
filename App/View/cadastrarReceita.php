<?php
include_once '../Controller/ControllerReceita.php';
include_once '../Controller/ControllerCategoria.php';

$controllerCategoria = new ControllerCategoria();
$controllerReceita = new ControllerReceita();

$controllerReceita->cadastrarReceita();
 ?>

<div class="container">
  <div class="row">
    <h3>Nova Receita</h3>
  </div>
  <hr>
  <form class="form" action="index.php?action=cadastrarReceita.php" method="post">
    <div class="row">
      <span class="col-2">Nome da Receita: </span>
       <input type="text" class="form-control col-5" name="nome" placeholder="Nome da Receita" maxlength="50"><br>
    </div>
    <br>
    <div class="row">
      <span class="col-2">Ingredientes: </span>
      <textarea type="text" class="form-control col-5" name="ingredientes" placeholder="Ingredientes" rows="10" maxlength="500"></textarea><br>
    </div>
    <br>
    <div class="row">
      <span class="col-2">Preparo:</span>
      <textarea type="text" class="form-control col-5" name="preparo" placeholder="Preparo" rows="10" maxlength="500"></textarea><br>
    </div>
    <br>
    <div class="row">
      <span class="col-2">Categoria:</span>
        <?php
        $controllerCategoria->getSelectOptionCategorias();
        ?>
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-sm btn-success" name="cadastrar" value="Cadastrar">
    </div>
  </form>
  <hr>
</div>

<div class="text-center">
  <a href="index.php?action=exibeReceitas.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
</div>
<br>
