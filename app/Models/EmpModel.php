<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpModel extends Model
{
  protected $table = 'emp';
  protected $primaryKey = 'id';
  protected $allowedFields = ['id_usuario', 'id_livro', 'emp_data', 'data_devolucao'];

  public function getEmpByUserId($userId)
  {
    return $this->where(['id_usuario' => $userId])->findAll();
  }
}
