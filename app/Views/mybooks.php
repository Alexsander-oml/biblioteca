<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
</head>

<body>
  <h1>Meus livros</h1>
  <a href="/books">Ver livros</a>
  <ul>
    <?php foreach ($myBooks as $book) : ?>
      <li>
        <?= $book['titulo'] ?> by <?= $book['autor'] ?>
        <a href="/devolver/<?= $book['emp_id'] ?>">Devolver</a>
      </li>
    <?php endforeach; ?>
  </ul>
  <a href="/logout">Logout</a>
</body>

</html>