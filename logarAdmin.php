<?php
    include_once "clsConexao.php";

    $user = $_POST['emailAdmin'];
    $senha = $_POST['senhaAdmin'];

    $query = "SELECT id, nome, email FROM usuarios WHERE email = '$user' AND senha = '$senha' ";
    $result = Conexao::consultar( $query );

    if(  mysqli_num_rows($result) > 0 ){
        session_start();

        $usuario = mysqli_fetch_assoc($result);

        $_SESSION["logado"] = TRUE;
        $_SESSION["id_usuario"] = $usuario['id'];
        $_SESSION["nome_usuario"] = $usuario['nome'];
        $_SESSION["admin"] = TRUE;

        header( "Location: shopping.php" );
    }else{
        header( "Location: login.php" );
    }
?>