<?php

include_once '../../Core/Model.php';

class Receita extends Model
{
  public static function getAll()
  {
      $db = static::getDB();
      $stmt = $db->query('SELECT * FROM receita');
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getAllReceitaAtivo()
  {
    $db = static::getDB();
    $stmt = $db->query('SELECT * FROM receita WHERE receita.ativo = 1');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectReceitaById($id_receita)
  {
    $db = static::getDB();
    $stmt = $db->query("SELECT r.id_receita, r.nome, r.ingredientes, r.preparo, r.id_categoria, u.nome as nome_usuario, c.descricao as descricao_categoria FROM receita r JOIN usuario u USING (id_usuario) JOIN categoria c USING (id_categoria) WHERE id_receita = $id_receita");
    return $stmt->fetch();
  }

  public function insertReceita($nome, $ingredientes, $preparo, $id_categoria, $id_usuario)
  {
    $db = static::getDB();
    $stmt = $db->query("INSERT INTO receita(nome, ingredientes, preparo, id_categoria, id_usuario)
                  VALUES ('$nome', '$ingredientes', '$preparo', $id_categoria, $id_usuario)");
    return true;
  }

  public function deleteReceita($id_receita)
  {
    $db = static::getDB();
    $stmt = $db->query("UPDATE receita SET ativo = 0 WHERE id_receita = $id_receita");
    return true;
  }

  public function updateReceita($id_receita, $nome, $ingredientes, $preparo, $id_categoria)
  {
    $db = static::getDB();
    $stmt = $db->query("UPDATE receita SET nome = '$nome', ingredientes = '$ingredientes', preparo = '$preparo', id_categoria = $id_categoria WHERE id_receita = $id_receita");
    return true;
  }

  public function selectAllReceitaByUsuario($id_usuario)
  {
    $db = static::getDB();
    $stmt = $db->query("SELECT * FROM receita WHERE id_usuario = $id_usuario");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
