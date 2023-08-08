<?php


$id = isset($_GET['id']) ? $_GET['id'] : null;
if(empty($id)){
    echo "<script>alert('O id do produto não localizado');
    window.location ='../sistema.php?tela=produtos'</script>";
    exit;
}

require_once 'class/BancoDeDados.php';
$banco = new BancoDeDados();
$banco->conectar();
$sql = "DELETE FROM produtos WHERE id_produto = ?";
$banco->deletar($sql,[$id]);
echo "<script>alert('Produto excluido com sucesso');
window.location ='../sistema.php?tela=produtos'</script>";