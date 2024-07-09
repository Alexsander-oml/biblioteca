<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Controller;

class BookController extends Controller
{
  public function index()
  {
    $model = new BookModel();
    $data['books'] = $model->getAvailableBooks();
    echo view('books', $data);
  }
}
