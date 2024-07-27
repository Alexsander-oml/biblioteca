<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Book</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      padding: 20px;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button[type="submit"]:hover {
      background-color: #45a049;
    }

    .flash-message {
      margin-bottom: 10px;
      padding: 10px;
      border-radius: 4px;
    }

    .success {
      background-color: #d4edda;
      color: #155724;
    }

    .error {
      background-color: #f8d7da;
      color: #721c24;
    }
  </style>
</head>

<body>
  <?php if (session()->getFlashdata('success')) : ?>
    <div class="flash-message success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')) : ?>
    <div class="flash-message error"><?= session()->getFlashdata('error') ?></div>
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