<?php

include_once "clsConexao.php";

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$tipo = $_POST['tipo'];
$validade = $_POST['validade'];
$categoria = $_POST['categoria'];
$imagem = $_FILES["foto"];

if($imagem != NULL) {
    $nomeFinal = time().'.jpg';
    if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
        $tamanhoImg = filesize($nomeFinal);
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
        $query = "INSERT INTO produtos (nome, preco, quantidade, tipo, validade, IdCategoria, foto) 
                    VALUES ('$nome','$preco','$quantidade','$tipo','$validade','$categoria','$mysqlImg')";
        //echo '<img src="'.$nomeFinal.'"/>';
        Conexao::executar( $query );
        header("cadastroProdutos.php");
    }
}
else {
    echo"Você não realizou o upload de forma satisfatória.";
}

?>