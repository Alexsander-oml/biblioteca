<?php

namespace App\Controllers;

use App\Models\EmpModel;
use App\Models\BookModel;
use CodeIgniter\Controller;

class EmpController extends Controller
{
  public function loan($bookId)
  {
    $session = session();
    if (!$session->get('logged_in')) {
      return redirect()->to('/login');
    }

    $model = new EmpModel();
    $bookModel = new BookModel();

    $loanData = [
      'id_usuario' => $session->get('id'),
      'id_livro' => $bookId,
      'emp_data' => date('Y-m-d H:i:s')
    ];

    $bookModel->update($bookId, ['disponivel' => 0]);
    $model->save($loanData);

    return redirect()->to('/books');
  }

  public function returnBook($loanId)
  {
    $session = session();
    if (!$session->get('logged_in')) {
      return redirect()->to('/login');
    }

    $model = new EmpModel();
    $loan = $model->find($loanId);

    $bookModel = new BookModel();
    $bookModel->update($loan['id_livro'], ['disponivel' => 1]);

    $model->update($loanId, ['data_devolucao' => date('Y-m-d H:i:s')]);

    return redirect()->to('/books');
  }
}
