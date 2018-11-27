<?php
include_once '../Controller/ControllerUsuario.php';
include_once '../Controller/ControllerPerfil.php';
include_once '../Model/Usuario.php';

$controllerUsuario = new ControllerUsuario();
$controllerPerfil = new ControllerPerfil();
$modelUsuario = new Usuario();

$controllerUsuario->editarUsuarioAdmin();
$usuario = $modelUsuario->selectUsuarioById($_GET['id_usuario']);

?>

<div class="container">
  <form method="post" action="index.php?action=admin/editarUsuario.php">
    <div class="row">
      <label class="col-1" for="nome">Nome</label><input class="col-5 form-control" type="text" name="nome" value="<?php echo  $usuario['nome']?>" required><br>
    </div>
    <br>
    <div class="row">
      <label class="col-1" for="cpf">CPF</label><input class="col-5 form-control" type="text" name="cpf" value="<?php echo  $usuario['cpf']?>" required><br>
    </div>
    <br>
    <div class="row">
      <label class="col-1" for="email">Email</label><input class="col-5 form-control" type="text" name="email" value="<?php echo  $usuario['email']?>" required><br>
      <label class="col-1" for="senha">Senha</label><input class="col-5 form-control" type="text" name="senha" value="<?php echo  $usuario['senha']?>" required><br>
    </div>
    <br>
    <div class="row">
      <label class="col-1" for="email">Perfil</label>
      <?php $controllerPerfil->getSelectOptionPerfilEditar($usuario['id_perfil']) ?>
    </div>
    <div class="text-center">
      <input class="btn btn-sm btn-success" type="submit" name="editar" value="Salvar">
      <input type="hidden" name="id_usuario" value="<?php echo  $usuario['id_usuario']?>">
    </div>
  </form>
  <hr>
</div>
<div class="text-center">
  <a href="index.php?action=admin/consultarUsuarios.php" class="btn btn-sm btn-warning" value='Voltar'><i class="fas fa-angle-double-left"></i> Voltar</a>
</div>
