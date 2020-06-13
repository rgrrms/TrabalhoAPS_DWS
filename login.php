<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="main">
        <div class="header"><h1>LOGIN</h1></div>
        <div class="container">
            <div class="usuers">
                <form class="login" method="post" action="logar.php" enctype="multipart/form-data">
                    <h1 class="title">LOGAR</h1>
                    <div class="itens">
                        <label for="email">Email: </label>
                        <input class="campos" type="text" name="email" id="email" maxlength="20" required>
                    </div>
                    <div class="itens">
                        <label for="senha">Senha: </label>
                        <input class="campos" type="password" name="senha" id="senha" step="0.01" required>
                    </div>
                    <div class="buttons">
                        <button id="login">Entra</button>
                    </div>
                </form>
                <div class="buttons">
                    <a href="cadastroClientes.php"><button id="creatAcount">Criar Conta!</button></a>
                </div>
            </div>
            <div>
                <hr>
            </div>
            <div class="admin">
                <div class="usuers">
                    <form class="loginAdmin" method="post" action="logarAdmin.php" enctype="multipart/form-data">
                        <h1 class="title">ADMIM</h1>
                        <div class="itens">
                            <label for="emailAdmin">Email: </label>
                            <input class="campos" type="text" name="emailAdmin" id="emailAdmin" maxlength="20" required>
                        </div>
                        <div class="itens">
                            <label for="senhaAdmin">Senha: </label>
                            <input class="campos" type="password" name="senhaAdmin" id="senhaAdmin" required>
                        </div>
                        <div class="buttons">
                            <button id="loginAdmin">Entra</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>