<?php

include_once '../Model/Usuario.php';

class ControllerUsuario
{
  public function getAllUsuario()
  {
    $modelUsuario = new Usuario();
    $usuarios = $modelUsuario->selectAllUsuarioAtivo();

    echo '<table class="table">
    <thead>
    <th>Id</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>E-mail</th>
    <th>Perfil</th>
    <th style="width:1%">Editar</th>
    <th style="width:1%">Excluir</th></thead>';
    echo "<tbody>";
    foreach($usuarios as $usuario){
      echo "<tr>";
      echo "<td>{$usuario['id_usuario']}</td>
      <td>{$usuario['nome']}</td>
      <td>{$usuario['cpf']}</td>
      <td>{$usuario['email']}</td>
      <td>{$usuario['descricao']}</td>";
      echo "<td><a class='btn btn-sm btn-outline-secondary' href='index.php?action=admin/editarUsuario.php&id_usuario={$usuario['id_usuario']}'><i class='fas fa-edit'></i></a></td>";
      echo "<td><form method='post' action='index.php?action=admin/consultarUsuarios.php'>
        <button type='submit' class='btn btn-sm btn-outline-danger' name='apagar'><i class='fas fa-times-circle'></i></button>
        <input type='hidden' name='id_usuario' value='{$usuario['id_usuario']}'>
      </form>
      </td>";
      echo "</tr>";
    }
    echo "</tbody></table>";
  }

  public function cadastrarUsuario()
  {
    if (isset($_POST['inserir'])) {
      $modelUsuario = new Usuario();
      $usuarios = $modelUsuario->insertUsuario($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha']);
    }
  }

  public function cadastrarUsuarioAdmin()
  {
    if (isset($_POST['inserir'])) {
      $modelUsuario = new Usuario();
      $usuarios = $modelUsuario->insertUsuario($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['id_perfil']);
    }
  }

  public function deleteUsuario()
  {
    if(isset($_POST['apagar'])){
      $modelUsuario = new Usuario();
      $usuarios = $modelUsuario->deleteUsuario($_POST['id_usuario']);
    }
  }

  public function validaUsuario()
  {
    if(isset($_POST['login'])){
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $modelUsuario = new Usuario();

      $usuario = $modelUsuario->selectUsuarioByEmail($email);

      if($usuario && $senha == $usuario['senha']) {
        $_SESSION['id_perfil'] = $usuario['id_perfil'];
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['nome'] = $usuario['nome'];
        header('Location: index.php?action=exibeReceitas.php');
      }
    }
  }

  public function editarUsuario()
  {
    if (isset($_POST['editar'])) {
      $modelUsuario = new Usuario();
      $modelUsuario->updateUsuario($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['id_usuario']);
      header('Location: index.php?action=editarUsuario.php&id_usuario=' . $_POST['id_usuario']);
    }
  }

  public function editarUsuarioAdmin()
  {
    if (isset($_POST['editar'])) {
      $modelUsuario = new Usuario();
      $modelUsuario->updateUsuario($_POST['nome'], $_POST['cpf'], $_POST['email'], $_POST['senha'], $_POST['id_usuario'], $_POST['perfil']);
      header('Location: index.php?action=admin/editarUsuario.php&id_usuario=' . $_POST['id_usuario']);
    }
  }
}

 ?>
