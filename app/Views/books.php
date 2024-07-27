<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Books</title>
</head>

<body>
  <a>Olá, <?= session()->get('nome') ?></a>
  <h1>Available Books</h1>
  <a href="/mybooks">My Books</a>
  <ul>
    <?php foreach ($books as $book) : ?>
      <li>
        <?= $book['titulo'] ?> by <?= $book['autor'] ?>
        <a href="/emp/<?= $book['id'] ?>">Pegar emprestado</a>
      </li>
    <?php endforeach; ?>
  </ul>
  <?php if (session()->get('email') === 'admin') : ?>
    <a href="/admin/books">Gerenciar livros</a>
  <?php endif; ?>
  <a href="/logout">Logout</a>
</body>

</html>