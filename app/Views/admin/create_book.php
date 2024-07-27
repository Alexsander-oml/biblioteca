<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Livro</title>
</head>

<body>
  <?php if (session()->getFlashdata('success')) : ?>
    <div><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')) : ?>
    <div><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>
  <form action="/admin/books/create" method="post">
    <input type="text" name="titulo" placeholder="Título" required>
    <input type="text" name="autor" placeholder="Autor" required>
    <input type="text" name="disponivel" placeholder="Disponível" required>
    <input type="text" name="ano" placeholder="Ano" required>
    <input type="text" name="editora" placeholder="Editora" required>
    <button type="submit">Criar Livro</button>
  </form>
</body>

</html>