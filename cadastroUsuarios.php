<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="css/Produtos.css">
</head>
<body>
<div class="menus">
    <div>
        <button>Menu</button>
        <!--<nav>
            <button>Home</button>
            <button>Cadastro de Usuarios</button>
        </nav>-->
    </div>
    <div class="main">
        <div class="header">
            <h1>CADASTRO DE USUARIOS</h1>
        </div>
        <div class="container">
            <form class="cadastro" method="post" enctype="multipart/form-data">
                <div class="itens">
                    <label for="nome">Nome: </label>
                    <input class="campos" type="text" id="nome" maxlength="20" required>
                </div>
                <div class="itens">
                    <label for="preco">E-mail: </label>
                    <input class="campos" type="number" id="preco" step="0.01" required>
                </div>
                <div class="itens">
                    <label for="perfil">Perfil: </label>
                    <select class="campos" type="text" id="perfil" required>
                        <option value="">Tipo</option>
                        <option value="a">Admin</option>
                        <option value="b">Estoquista</option>
                        <option value="c">Estagiario</option>
                    </select>
                </div>
                <div class="itens">
                    <label for="validade">Senha: </label>
                    <input class="campos" type="password" id="validade" required>
                </div>
                <div class="itens">
                    <label for="foto">Foto</label>
                    <input class="campos" type="file" id="foto" accept="image/png, image/jpeg" required>
                </div>
                <div class="buttons">
                    <button id="limpar">Limpar</button>
                    <button id="cadastrar">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <div><button>Sair</button></div>
</div>
<script src="js/Produtos.js"></script>
</body>
</html>