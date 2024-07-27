<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    .container h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .container form {
      display: flex;
      flex-direction: column;
    }

    .container form input[type="text"],
    .container form input[type="password"] {
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .container form button {
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .container form button:hover {
      background-color: #45a049;
    }

    .container a {
      text-align: center;
      display: block;
      margin-top: 10px;
      color: #666;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Login</h1>
    <?php if (session()->getFlashdata('msg')) : ?>
      <div><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <form action="/login/auth" method="post">
      <input type="text" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Senha" required>
      <button type="submit">Login</button>
    </form>
    <a href="/register">Registrar</a>
  </div>
</body>

</html>