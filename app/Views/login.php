<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <?php if (session()->getFlashdata('msg')) : ?>
    <div><?= session()->getFlashdata('msg') ?></div>
  <?php endif; ?>
  <form action="/login/auth" method="post">
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Senha" required>
    <button type="submit">Login</button>
  </form>
  <a href="/register">Registrar</a>
</body>

</html>