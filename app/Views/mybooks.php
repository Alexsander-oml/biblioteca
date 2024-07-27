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

    h1 {
      color: #333;
      text-align: center;
      margin-top: 30px;
    }

    a {
      color: #007bff;
      text-decoration: none;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
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
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    li a {
      color: #dc3545;
      text-decoration: none;
      margin-left: 10px;
    }

    .devolver {
      text-align: left;
    }

    .devolver a {
      background-color: #dc3545;
      color: #fff;
      padding: 5px 10px;
      border-radius: 3px;
      text-decoration: none;
    }

    .logout {
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Meus livros</h1>
    <a href="/books">Ver livros</a>
    <ul>
      <?php foreach ($myBooks as $book) : ?>
        <li>
          <?= $book['titulo'] ?> by <?= $book['autor'] ?>
          <span class="devolver">
            <a href="/devolver/<?= $book['emp_id'] ?>">Devolver</a>
          </span>
        </li>
      <?php endforeach; ?>
    </ul>
    <div class="logout">
      <a href="/logout">Logout</a>
    </div>
  </div>
</body>

</html>