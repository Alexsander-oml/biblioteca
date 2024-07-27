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
          <?= $book['titulo'] ?> by <?= $book['autor'] ?>
          <a href="/emp/<?= $book['id'] ?>">Pegar emprestado</a>
          <?php if (session()->get('email') === 'admin') : ?>
            <div class="admin-links">
              <a href="/admin/books/edit/<?= $book['id'] ?>">Editar</a>
              <a href="/admin/books/delete/<?= $book['id'] ?>">Deletar</a>
            </div>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php if (session()->get('email') === 'admin') : ?>
      <div class="admin-links">
        <a href="/admin/books/create">Criar novo livro</a>
        <a href="/admin/books">Gerenciar livros</a>
      </div>
    <?php endif; ?>
    <div class="logout-link">
      <a href="/logout">Logout</a>
    </div>
  </div>
</body>

</html>