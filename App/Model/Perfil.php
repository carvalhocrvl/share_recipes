<?php

include_once '../../Core/Model.php';

class Perfil extends Model
{
  const ADMIN = 1;
  const CLIENTE = 2;

  public static function getAll()
  {
      $db = static::getDB();
      $stmt = $db->query("SELECT * FROM perfil ORDER BY perfil.id_perfil DESC");
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
