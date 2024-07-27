<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    h1 {
      color: #333;
      text-align: center;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      margin-bottom: 10px;
      padding: 10px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    a {
      color: #333;
      text-decoration: none;
    }

    .admin-links {
      display: flex;
      justify-content: space-between;
    }

    .admin-links a {
      margin-right: 10px;
    }

    .logout-link {
      text-align: center;
      margin-top: 20px;
    }

    .btn-primary {
      background-color: #007bff;
      color: #fff;
      padding: 5px 10px;
      border-radius: 3px;
    }

    .btn-danger {
      background-color: #dc3545;
      color: #fff;
      padding: 5px 10px;
      border-radius: 3px;
    }

    .btn-success {
      background-color: #28a745;
      color: #fff;
      padding: 5px 10px;
      border-radius: 3px;
    }

    .btn-row {
      display: flex;
      flex-wrap: wrap;
    }

    .btn-row a {
      flex-basis: calc(33.33% - 10px);
      margin-bottom: 10px;
    }

    .borrow-button {
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <a>Olá, <?= session()->get('nome') ?></a>
    <h1>Available Books</h1>
    <a href="/mybooks">My Books</a>
    <ul>
      <?php foreach ($books as $book) : ?>
        <li>
          <div>
            <?= $book['titulo'] ?> by <?= $book['autor'] ?>
          </div>
          <div class="admin-links">
            <?php if (session()->get('email') === 'admin') : ?>
              <a href="/admin/books/edit/<?= $book['id'] ?>" class="btn-success">Editar</a>
              <a href="/admin/books/delete/<?= $book['id'] ?>" class="btn-danger">Deletar</a>
            <?php endif; ?>
            <a href="/emp/<?= $book['id'] ?>" class="btn-primary borrow-button">Pegar emprestado</a>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php if (session()->get('email') === 'admin') : ?>
      <div class="admin-links">
        <div class="btn-row">
          <a href="/admin/books/create" class="btn-success">Criar novo livro</a>
          <a href="/admin/books" class="btn-primary">Gerenciar livros</a>
        </div>
      </div>
    <?php endif; ?>
    <div class="logout-link">
      <a href="/logout">Logout</a>
    </div>
  </div>
</body>

</html>