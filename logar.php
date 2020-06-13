<?php
    include_once "clsConexao.php";
// $usuario_cadastrado = "admin";
// $senha_cadastrada = "123";
    $user = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT id, nome, email FROM clientes WHERE email = '$user' AND senha = '$senha' ";
    $result = Conexao::consultar( $query );

    if(  mysqli_num_rows($result) > 0 ){
        session_start();

        $usuario = mysqli_fetch_assoc($result);

        $_SESSION["logado"] = TRUE;
        $_SESSION["id_usuario"] = $usuario['id'];
        $_SESSION["nome_usuario"] = $usuario['nome'];

        header( "Location: shopping.php" );
    }else{
        header( "Location: login.php" );
    }
?>