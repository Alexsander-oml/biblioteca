<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
</head>

<body>
  <h1>Available Books</h1>
  <ul>
    <?php foreach ($books as $book) : ?>
      <li>
        <?= $book['titulo'] ?> by <?= $book['autor'] ?>
        <a href="/emp/<?= $book['id'] ?>">Pegar emprestado</a>
      </li>
    <?php endforeach; ?>
  </ul>
  <a href="/logout">Logout</a>
</body>

</html>