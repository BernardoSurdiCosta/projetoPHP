<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Sistema</title>

  <!-- CSS -->
  <link rel="stylesheet" href="assets/css/login.css">

  <!-- Boostrap -->
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-utilities.min.css">
</head>
<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form action="application/fazer-login.php" method="POST">
      <h1 class="h3 mb-3 fw-normal">LOGIN</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="txtUsuario" name="txtUsuario">
        <label for="txtUsuario">Usuário:</label>
      </div>

      <div class="form-floating">
        <input type="password" class="form-control" id="txtSenha" name="txtSenha">
        <label for="txtUsuario">Senha:</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-body-secondary">Projeto SA</p>
    </form>
  </main>

  <!-- Scripts -->
  <!-- JQuery -->
  <script type="text/javascript" src="vendor/jquery-3.7.0/jquery-3.7.0.min.js"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap-esm.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap-bundle.min.js"></script>
</body>
</html>