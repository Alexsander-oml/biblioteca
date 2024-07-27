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
  public function myBooks()
  {
    $session = session();
    $model = new BookModel();
    $data['myBooks'] = $model->getMyBooks($session->get('id'));
    echo view('mybooks', $data);
  }
  public function createBook()
  {
    $session = session();
    if ($session->get('email') === 'admin') {
      $model = new BookModel();
        $bookData = [
          'titulo' => $this->request->getVar('titulo'),
          'autor' => $this->request->getVar('autor'),
          'disponivel' => $this->request->getVar('disponivel'),
          'ano' => $this->request->getVar('ano'),
          'editora' => $this->request->getVar('editora')
        ];
      $model->insert($bookData);
      return redirect()->to('/admin/books');
    } else {
      return redirect()->to('/books');
    }
  }

  public function deleteBook($bookId)
  {
    $session = session();
    if ($session->get('email') === 'admin') {
      $model = new BookModel();
      $model->delete($bookId);
      return redirect()->to('/admin/books');
    } else {
      return redirect()->to('/books');
    }
  }

  public function updateBook()
  {
    $session = session();
    if ($session->get('email') === 'admin') {
      $model = new BookModel();
      $bookData = [
        'titulo' => $this->request->getVar('titulo'),
        'autor' => $this->request->getVar('autor'),
        'disponivel' => $this->request->getVar('disponivel'),
        'ano' => $this->request->getVar('ano'),
        'editora' => $this->request->getVar('editora')
      ];
      $bookId = $this->request->getVar('book_id');
      $model->update($bookId, $bookData);
      return redirect()->to('/admin/books');
    } else {
      return redirect()->to('/books');
    }
  }

  public function adminBooks()
  {
    $session = session();
    if ($session->get('email') === 'admin') {
      $model = new BookModel();
      $data['books'] = $model->getAllBooks();
      echo view('admin/books', $data);
    } else {
      return redirect()->to('/books');
    } 
  }
  public function createForm()
  {
    $session = session();
    if ($session->get('email') === 'admin') {
      echo view('admin/create_book');
    } else {
      return redirect()->to('/books');
    }
  }

  public function updateForm($bookId)
  {
    $session = session();
    if ($session->get('email') === 'admin') {
      $model = new BookModel();
      $data['book'] = $model->find($bookId);
      echo view('admin/update_book', $data);
    } else {
      return redirect()->to('/books');
    }
  }
}
