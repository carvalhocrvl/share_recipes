<?php
include '../Model/Categoria.php';

class ControllerCategoria
{
  public function getSelectOptionCategorias()
  {
    $modelCategoria = new Categoria();
    $categorias = $modelCategoria->getAll();
    echo '<select class="form-control col-2" name="categoria">';
    foreach ($categorias as $categoria) {
      echo '<option value="' . $categoria['id_categoria'] . '">';
      echo $categoria['descricao'];
      echo '</option>';
    }
    echo "</select>";
  }

  public function getSelectOptionCategoriasEditar($id_categoria)
  {
    $modelCategoria = new Categoria();
    $categorias = $modelCategoria->getAll();
    echo '<select class="form-control col-2" name="categoria">';
    foreach ($categorias as $categoria) {
      if($categoria['id_categoria'] == $id_categoria){
        echo '<option value="' . $categoria['id_categoria'] . '" selected>';
        echo $categoria['descricao'];
        echo '</option>';
      } else {
        echo '<option value="' . $categoria['id_categoria'] . '">';
        echo $categoria['descricao'];
        echo '</option>';
      }
    }
    echo "</select>";
  }
}
