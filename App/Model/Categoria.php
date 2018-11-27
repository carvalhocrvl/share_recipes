<?php

include_once '../../Core/Model.php';

class Categoria extends Model
{

  public function getAll()
  {
    $db = static::getDB();
    $stmt = $db->query('SELECT * FROM categoria');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
