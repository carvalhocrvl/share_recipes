<?php
include 'templates/Head.php';
include_once '../Controller/ControllerUsuario.php';
include_once '../Model/Usuario.php';

$controllerUsuario = new ControllerUsuario();
$controllerUsuario->editarUsuario();

$modelUsuario = new Usuario();
$usuario = $modelUsuario->selectUsuarioById($_SESSION['id_usuario']);

?>

<div class="container">
  <table style="width: 100%">
    <th style="width: 25%">
    </th>
    <th>
      <div class="row">
        <h3 class="col-">Perfil do Usuário</h3>
      </div>

      <div class="fixed-top" style="top: 4.5em; right: 2em;">
        <a class="btn btn-sm btn-outline-dark float-right" href="index.php?action=consultarReceitasUsuario.php">Ver Minhas Receitas</a>
      </div>

      <br>
      <form method="post" action="index.php?action=editarUsuario.php&id_usuario=<?php echo $usuario['id_usuario']?>">
        <div class="row">
          <label class="col-2" for="nome">Nome</label><input class="col-10 form-control" type="text" name="nome" value="<?php echo  $usuario['nome']?>" required><br>
        </div>
        <br>
        <div class="row">
          <label class="col-2" for="cpf">CPF</label><input class="col-10 form-control" type="text" name="cpf" value="<?php echo  $usuario['cpf']?>" required><br>
        </div>
        <br>
        <div class="row">
          <label class="col-2" for="email">Email</label><input class="col-10 form-control" type="text" name="email" value="<?php echo  $usuario['email']?>" required><br>
        </div>
        <br>
        <div class="row">
          <label class="col-2" for="senha">Senha</label><input class="col-10 form-control" type="text" name="senha" value="<?php echo  $usuario['senha']?>" required><br>
        </div>
        <br>
        <div class="text-center">
          <input class="btn btn-sm btn-outline-primary" style="width: 150px" type="submit" name="editar" value="Salvar Edição">
          <input type="hidden" name="id_usuario" value="<?php echo  $usuario['id_usuario']?>">
        </div>
      </form>
      <hr>
    </div>


  </th>
  <th style="width: 25%">
  </th>

</table>
<div class="text-center">
  <a href="index.php?action=exibeReceitas.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
</div>
