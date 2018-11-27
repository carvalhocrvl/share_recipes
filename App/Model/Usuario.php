<?php

include_once '../../Core/Model.php';
include_once 'Perfil.php';

class Usuario extends Model
{
  public static function getAll()
  {
      $db = static::getDB();
      $stmt = $db->query('SELECT * FROM usuario');
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function insertUsuario($nome, $cpf, $email, $senha, $id_perfil = Perfil::CLIENTE)
  {
    $db = static::getDB();
    $stmt = $db->query("INSERT INTO usuario(nome, cpf, email, senha, id_perfil)
                  VALUES ('$nome', '$cpf', '$email', '$senha', $id_perfil)");
    return true;
  }

  public function deleteUsuario($id_usuario)
  {
    $db = static::getDB();
    // $stmt = $db->query('DELETE FROM usuario WHERE id_usuario=' . $id);
    $stmt = $db->query("UPDATE usuario SET ativo = 0 WHERE id_usuario = $id_usuario");
    return true;
  }

  public function selectUsuarioByEmail($email){
    $db = static::getDB();
    $stmt = $db->query('SELECT * FROM usuario WHERE email = "' . $email . '"');
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectUsuarioById($id_usuario)
  {
    $db = static::getDB();
    $stmt = $db->query('SELECT * FROM usuario WHERE id_usuario = "' . $id_usuario . '"');
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function selectAllUsuario()
  {
    $db = static::getDB();
    $stmt = $db->query('SELECT * FROM usuario JOIN perfil USING (id_perfil)');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectAllUsuarioAtivo()
  {
    $db = static::getDB();
    $stmt = $db->query('SELECT * FROM usuario JOIN perfil USING (id_perfil) WHERE usuario.ativo = 1');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function updateUsuario($nome, $cpf, $email, $senha, $id_usuario, $id_perfil = Perfil::CLIENTE)
  {
    $db = static::getDB();
    $stmt = $db->query("UPDATE usuario SET nome = '$nome', cpf = '$cpf', email = '$email', senha = '$senha', id_perfil = $id_perfil WHERE id_usuario = $id_usuario");
    return true;
  }

}
