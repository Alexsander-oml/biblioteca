<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'usuarios';
  protected $primaryKey = 'id';
  protected $allowedFields = ['nome_de_usuario', 'senha', 'email'];

  public function getUserByEmail($email)
  {
    return $this->asArray()
      ->where(['email' => $email])
      ->first();
  }
}
