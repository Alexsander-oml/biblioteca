<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
  protected $table = 'livros';
  protected $primaryKey = 'id';
  protected $allowedFields = ['titulo', 'autor', 'disponivel'];

  public function getAvailableBooks()
  {
    return $this->where(['disponivel' => 1])->findAll();
  }
}
