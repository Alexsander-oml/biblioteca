<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Criar Livro</title>
  <style>
    /* Add your modern CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
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
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
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
      background-color: #f2dede;
      color: #a94442;
      border: 1px solid #ebccd1;
      border-radius: 4px;
    }

    .flash-success {
      background-color: #dff0d8;
      color: #3c763d;
      border-color: #d6e9c6;
    }
  </style>
</head>

<body>
  <?php if (session()->getFlashdata('success')) : ?>
    <div class="flash-message flash-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')) : ?>
    <div class="flash-message"><?= session()->getFlashdata('error') ?></div>
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