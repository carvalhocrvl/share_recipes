<?php
include_once '../Controller/ControllerReceita.php';
include_once '../Controller/ControllerCategoria.php';

$controllerCategoria = new ControllerCategoria();
$controllerReceita = new ControllerReceita();

$controllerReceita->editarReceitaAdmin();
$receita = $controllerReceita->getReceitaById($_GET['id_receita']);

 ?>

<div class="container">
  <div class="row">
    <h3>Editar Receita</h3>
  </div>
  <hr>
  <form class="form" action="index.php?action=admin/editarReceita.php&id_receita=<?php echo $receita['id_receita'];?>" method="post">
    <div class="row">
      <span class="col-2">Nome da Receita: </span>
       <input type="text" class="form-control col-5" name="nome" placeholder="Nome da Receita" value="<?php echo $receita['nome'];?>"><br>
    </div>
    <br>
    <div class="row">
      <span class="col-2">Ingredientes: </span>
      <textarea type="text" class="form-control col-5" name="ingredientes" placeholder="Ingredientes" rows="10" maxlength="500"><?php echo $receita['ingredientes'];?></textarea><br>
    </div>
    <br>
    <div class="row">
      <span class="col-2">Preparo:</span>
      <textarea type="text" class="form-control col-5" name="preparo" placeholder="Preparo" rows="10" maxlength="500"><?php echo $receita['preparo'];?></textarea><br>
    </div>
    <br>
    <div class="row">
      <span class="col-2">Categoria:</span>
        <?php
        $controllerCategoria->getSelectOptionCategoriasEditar($receita['id_categoria']);
        ?>
    </div>
    <div class="text-center">
      <input type="submit" class="btn btn-sm btn-outline-primary" style="width: 150px"  name="editar" value="Salvar Edição">
      <input type="hidden" name="id_receita" value="<?php echo $receita['id_receita'];?>">
    </div>
  </form>
  <hr>
</div>

<div class="text-center">
  <a href="index.php?action=admin/consultarReceitas.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
</div>
<br>
