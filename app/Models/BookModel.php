<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
  protected $table = 'livros';
  protected $primaryKey = 'id';
  protected $allowedFields = ['titulo', 'autor', 'disponivel', 'ano', 'editora'];

  public function getAvailableBooks()
  {
    return $this->where('disponivel !=', 0)->findAll();

  }
  public function getAllBooks()
  {
    return $this->findAll();
  }
  public function getMyBooks($userId)
  {
    return $this->select('livros.*, emprestimos.id as emp_id')
                ->join('emprestimos', 'emprestimos.id_livro = livros.id')
                ->join('usuarios', 'usuarios.id = emprestimos.id_usuario')
                ->where('usuarios.id', $userId)
                ->where('emprestimos.data_devolucao IS NULL')
                ->findAll();
  }
}
