<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Book</title>
</head>

<body>
  <?php if (session()->getFlashdata('success')) : ?>
    <div><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')) : ?>
    <div><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>
  <form action="/admin/books/update" method="post">
    <input type="hidden" name="book_id" value="<?= $book['id'] ?>">
    <input type="text" name="titulo" placeholder="Título" value="<?= $book['titulo'] ?>" required>
    <input type="text" name="autor" placeholder="Autor" value="<?= $book['autor'] ?>" required>
    <input type="text" name="disponivel" placeholder="Disponível" value="<?= $book['disponivel'] ?>" required>
    <input type="text" name="ano" placeholder="Ano" value="<?= $book['ano'] ?>" required>
    <input type="text" name="editora" placeholder="Editora" value="<?= $book['editora'] ?>" required>
    <button type="submit">Update Book</button>
  </form>
</body>

</html>