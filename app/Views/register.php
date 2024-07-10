<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
</head>

<body>
  <?php if (session()->getFlashdata('success')) : ?>
    <div><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')) : ?>
    <div><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>
  <form action="/user/registrar" method="post">
    <input type="text" name="email" placeholder="Email" required>
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Registrar</button>
  </form>
</body>

</html>