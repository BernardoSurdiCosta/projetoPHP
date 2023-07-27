<?php
    session_start();
    if(!isset($_SESSION['logado']) || !$_SESSION['logado']){
        header('LOCATION: login.php');
    }
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.115.4">
  <title>Principal - Sistema</title>

  <!-- Boostrap -->
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-utilities.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/sistema.css" rel="stylesheet">

</head>

<body>

  <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">Projeto SA</a>
    <h6 class="text-white w-80 text-center">Bem-vindo <?php echo $_SESSION ['nome']; ?></h6>
    <a class="text-white px-4 btn" href="" onclick="sair()"><i class="bi bi-box-arrow-right"></i> Sair</a>

  </header>

  <div class="container-fluid">
    <div class="row">
      <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
        <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
          aria-labelledby="sidebarMenuLabel">
          <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 active" href="sistema.php"><i
                    class="bi bi-house-fill"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="sistema.php?tela=produtos"></svg><i
                    class="bi bi-box-seam-fill"></i>Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="sistema.php?tela=vendas"><i class="bi bi-basket"></i>Vendas</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div 
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <?php
              $tela = isset($_GET['tela']) ? $_GET['tela'] : '';

              if ($tela== 'produtos'){
                include_once 'cadastro-produtos.php';
              }else if($tela == 'vendas'){

              }else{
                echo"<h1 class='w-100 text-center'>Tela principal do sistema</h1>";
              }
          ?>
        </div>
      </main>
    </div>
  </div>
  <!-- Scripts -->
  <!-- JQuery -->
  <script type="text/javascript" src="vendor/jquery-3.7.0/jquery-3.7.0.min.js"></script>

  <!-- Bootstrap -->
  <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap-esm.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap-bundle.min.js"></script>

  <!-- Funções -->
  <script type="text/javascript">
    function sair(){
    var resposta = confirm("Deseja reamente sair?");
    if(resposta){
      window.location = 'application/fazer-logout.php'
    }}
  </script>
</body>

</html>