<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - SISTEMA</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/home.css">

    <!-- Boostrap -->
    <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-5.3.0-dist/css/bootstrap-utilities.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <header data-bs-theme="dark">
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="login.php" class="btn btn-primary">LOGIN</a>
            </div>
        </div>
    </header>

    <main>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php

                    $strConnection = "mysql:host=localhost;dbname=db_produtos";
                    $db_usuario = 'root';
                    $db_senha = 'senai';
                    $conexao = new PDO($strConnection, $db_usuario, $db_senha);

                    $sql = 'SELECT * FROM produtos';
                    
                    $stmt = $connexao->prepare($sql);
                    $stmt->execute();
                    $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
                     
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="application/uploads/foto_produto_2023-06-19_14-21-28.jpg" alt="" width="100%" height="225">
                            <div class="card-body">
                                <p class="card-text">Descrição:</p>
                                <p class="card-text">Preço:</p>
                                <p class="card-text">Estoque:</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-hand-thumbs-up-fill"></i></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-hand-thumbs-down-fill"></i></button>
                                    </div>
                                    <small class="text-body-secondary">...</small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="mb-1">&copy; Situação de Aprendizagem PHP</p>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- JQuery -->
    <script type="text/javascript" src="vendor/jquery-3.7.0/jquery-3.7.0.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap-esm.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap-5.3.0-dist/js/bootstrap-bundle.min.js"></script>
</body>

</html>