<?php
include_once "clsConexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "INSERT INTO clientes (nome,email,senha) VALUES ( '$nome', '$email', '$senha' )";
Conexao::executar( $query );
header("Location: login.php");
?>