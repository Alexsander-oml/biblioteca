<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
  public function index()
  {
    helper(['form']);
    echo view('login');
  }

  public function auth()
  {
    $session = session();
    $model = new UserModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');

    $data = $model->getUserByUsername($username);

    if ($data) {
      $pass = $data['senha'];
      $verify_pass = password_verify($password, $pass);
      if ($verify_pass) {
        $ses_data = [
          'id'       => $data['id'],
          'usuario' => $data['nome_de_usuario'],
          'logged_in'     => TRUE
        ];
        $session->set($ses_data);
        return redirect()->to('/books');
      } else {
        $session->setFlashdata('msg', 'Senha incorreta.');
        return redirect()->to('/login');
      }
    } else {
      $session->setFlashdata('msg', 'Usuário não encontrado.');
      return redirect()->to('/login');
    }
  }
  public function register()
  {
    helper(['form']);
    echo view('register');
  }

  public function registrar()
  {
    helper(['form']);
    $session = session();
    $model = new UserModel();

    $data = [
      'nome_de_usuario' => $this->request->getVar('username'),
      'senha' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
    ];

    if ($model->save($data)) {
      $session->setFlashdata('success', 'Registro bem-sucedido');
      return redirect()->to('/login');
    } else {
      $session->setFlashdata('error', 'Registro falhou');
      return redirect()->to('/register');
    }
  }
  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/login');
  }
}
