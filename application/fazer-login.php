<?php
    // Validação de dados
    $usuario = isset($_POST['txtUsuario']) ? $_POST['txtUsuario'] : '';
    $senha = isset($_POST['txtSenha']) ? $_POST['txtSenha'] : '';

    if (empty($usuario) || empty($senha)) {
        header('LOCATION: ../login.php');
        exit;
    } 

    // Se passou pela validação, continua a partir daqui

    // Conexão com Banco de Dados
    $strConnection = "mysql:host=localhost;dbname=db_produtos";
    $db_usuario = 'root';
    $db_senha = 'senai';
    $conexao = new PDO($strConnection, $db_usuario, $db_senha);

    // Executar consulta no BD
    $sql = 'SELECT * FROM usuarios WHERE usuario=:user AND senha=:pass';
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':user', $usuario);
    $stmt->bindParam(':pass', $senha);
    $stmt->execute();

    // Verificar se a consulta no BD retornou pelo menos um linha
    if ($stmt->rowCount() > 0) {
        // Abrindo uma sessão
		session_start();
		$_SESSION['logado'] = TRUE;

        // Encaminhando usuário para o Sistema
        header('LOCATION: ../sistema.php');
    } else {
        echo '<script> 
                alert("Usuário ou senha inválidos. Verifique!");
                window.location = "../login.php";
        </script>';
    }




