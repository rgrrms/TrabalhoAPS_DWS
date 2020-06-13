<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/Produtos.css">
</head>
<body>
<div class="menus">
    <div class="main">
        <div class="header">
            <h1>CADASTRO</h1>
        </div>
        <div class="container">
            <form class="cadastro" method="post" action="clsCadastrar.php" enctype="multipart/form-data">
                <div class="itens">
                    <label for="nome">Nome: </label>
                    <input class="campos" type="text" id="nome" maxlength="100" required>
                </div>
                <div class="itens">
                    <label for="email">E-mail: </label>
                    <input class="campos" type="email" name="email" id="email" required>
                </div>
                <div class="itens">
                    <label for="senha">Senha: </label>
                    <input class="campos" type="password" name="senha" id="senha" required>
                </div>
                <div class="buttons">
                    <button id="limpar">Limpar</button>
                    <button id="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="js/Produtos.js"></script>
</body>
</html>