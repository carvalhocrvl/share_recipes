<?php

include '../Model/Receita.php';

class ControllerReceita
{

  public function cadastrarReceita()
  {
    if (isset($_POST['cadastrar'])) {
      $nome = $_POST['nome'];
      $ingredientes = $_POST['ingredientes'];
      $preparo = $_POST['preparo'];
      $categoria = $_POST['categoria'];
      $modelReceita = new Receita();
      $modelReceita->insertReceita($nome, $ingredientes, $preparo, $categoria, $_SESSION['id_usuario']);
    }
  }

  public function getAllReceita()
  {
    $modelReceita = new Receita();
    $receitas = $modelReceita->getAll();
    echo '<table class="table" id="receitas"><thead><th>Nome</th><th style="width: 15%">Ver Receita</th></thead><tbody>';
    foreach ($receitas as $receita) {
      echo '<tr>';
      echo '<td>'. $receita['nome'] .'</td>';
      echo "<td style='width: 15%'><a href='index.php?action=consultarReceita.php&id_receita={$receita['id_receita']}' class='btn btn-sm btn-outline-danger'><i class='fas fa-search'></i> Ver Receita</a></td>";
      echo '</tr>';
    }
    echo '</tbody></table>';
  }

  public function getAllReceitaAdmin()
  {
    $modelReceita = new Receita();
    $receitas = $modelReceita->getAll();
    echo '<table class="table" id="receitas">
    <thead>
    <th>Nome</th>
    <th>Ativo</th>
    <th>Editar</th>
    <th>Excluir</th>
    </thead>
    <tbody>';
    foreach ($receitas as $receita) {
      echo '<tr>';
      echo "<td>{$receita['nome']}</td>";
      echo "<td style='width: 1%'>{$receita['ativo']}</td>";
      echo "<td style='width: 1%'><a href='index.php?action=admin/editarReceita.php&id_receita={$receita['id_receita']}' class='btn btn-sm btn-outline-secondary'><i class='fas fa-edit'></i></a></td>";
      echo "<td style='width: 1%'><form method='post' action='index.php?action=admin/consultarReceitas.php'>
        <button type='submit' class='btn btn-sm btn-outline-danger' name='apagar'><i class='fas fa-times-circle'></i></button>
        <input type='hidden' name='id_receita' value='{$receita['id_receita']}'>
      </form>
    </td>";
    echo '</tr>';
  }
  echo '</tbody></table>';
}

public function removeReceita()
{
  if(isset($_POST['apagar'])){
    $modelReceita = new Receita();
    $modelReceita->deleteReceita($_POST['id_receita']);
  }
}

public function editarReceita()
{
  if(isset($_POST['editar'])) {
    $modelReceita = new Receita();
    $modelReceita->updateReceita($_POST['id_receita'], $_POST['nome'], $_POST['ingredientes'], $_POST['preparo'], $_POST['categoria']);
    header('Location:  index.php?action=consultarReceitasUsuario.php');
  }
}

public function editarReceitaAdmin()
{
  if(isset($_POST['editar'])) {
    $modelReceita = new Receita();
    $modelReceita->updateReceita($_POST['id_receita'], $_POST['nome'], $_POST['ingredientes'], $_POST['preparo'], $_POST['categoria']);
    header('Location:  index.php?action=admin/consultarReceitas.php');
  }
}

public function exibeAllReceitaByUsuario($id_usuario)
{
  $modelReceita= new Receita();
  $receitas = $modelReceita->selectAllReceitaByUsuario($id_usuario);
  echo "<table class='table'>";
  echo "
  <thead>
  <tr>
  <th>Nome</th>
  <th style='width: 5%'>Consultar</th>
  <th style='width: 5%'>Editar</th>
  <tr>
  </thead>
  <tbody>";

  foreach ($receitas as $receita) {
    echo "<tr>";
    echo "<td>{$receita['nome']}</td>";
    echo "<td><a href='index.php?action=consultarReceitaU.php&id_receita={$receita['id_receita']}' class='btn btn-sm btn-outline-info'><i class='fas fa-search'></i> Consultar</a></td>";
    echo "<td><a href='index.php?action=editarReceita.php&id_receita={$receita['id_receita']}' class='btn btn-sm btn-outline-secondary'><i class='fas fa-edit'></i> Editar</a></td>";
    echo "</tr>";
  }
  echo "</tdoby></table>";
}

public function getReceitaById($id_receita)
{
  $modelReceita = new Receita();
  return $modelReceita->selectReceitaById($id_receita);
}
}
