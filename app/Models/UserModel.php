<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'usuarios';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nome_de_usuario', 'senha'];

  public function getUserByUsername($nome_de_usuario)
  {
    return $this->asArray()
      ->where(['nome_de_usuario' => $nome_de_usuario])
      ->first();
  }
}
