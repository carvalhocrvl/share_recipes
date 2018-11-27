<?php

include_once '../Model/Perfil.php';

class ControllerPerfil
{
  public function getSelectOptionPerfil()
  {
    $modelPerfil = new Perfil();
    $perfis = $modelPerfil->getAll();
    echo '<select class="form-control col-2" name="perfil">';
    foreach ($perfis as $perfil) {
      echo '<option value="' . $perfil['id_perfil'] . '">';
      echo $perfil['descricao'];
      echo '</option>';
    }
    echo "</select>";
  }

  public function getSelectOptionPerfilEditar($id_perfil)
  {
    $modelPerfil = new Perfil();
    $perfis = $modelPerfil->getAll();
    echo '<select class="form-control col-2" name="perfil">';
    foreach ($perfis as $perfil) {
      if($perfil['id_perfil'] == $id_perfil){
        echo '<option value="' . $perfil['id_perfil'] . '" selected>';
        echo $perfil['descricao'];
        echo '</option>';
      } else {
        echo '<option value="' . $perfil['id_perfil'] . '">';
        echo $perfil['descricao'];
        echo '</option>';
      }
    }
    echo "</select>";
  }
}
