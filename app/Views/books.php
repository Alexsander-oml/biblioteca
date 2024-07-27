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
      font-size: 24px;
      margin-bottom: 20px;
    }

    ul {
      list-style-type: none;
      padding: 0;
    }

    li {
      background-color: #fff;
      border-radius: 5px;
      padding: 10px;
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    a {
      color: #333;
      text-decoration: none;
    }

    .btn {
      display: inline-block;
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #555;
    }

    .btn.borrow {
      background-color: #007bff;
    }

    .btn.borrow:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  <div class="container">
    <a>Olá, <?= session()->get('nome') ?></a>
    <h1>Available Books</h1>
    <a href="/mybooks" class="btn">My Books</a>
    <ul>
      <?php foreach ($books as $book) : ?>
        <li>
          <span>
            <?= $book['titulo'] ?> by <?= $book['autor'] ?>
          </span>
          <a href="/emp/<?= $book['id'] ?>" class="btn borrow">Pegar emprestado</a>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php if (session()->get('email') === 'admin') : ?>
      <a href="/admin/books" class="btn">Gerenciar livros</a>
    <?php endif; ?>
    <a href="/logout" class="btn">Logout</a>
  </div>
</body>

</html>