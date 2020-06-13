<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping</title>
    <link rel="stylesheet" type="text/css" href="css/Shopping.css">
</head>
<body>
<div class="menus">
    <div class="main">
        <div class="header">
            <h1>SHOPPING</h1>
            <a href="deslogar.php"><button>Sair</button></a>
            <?php
            if ( isset($_SESSION["admin"]) && $_SESSION['admin']){
                echo '<a href="cadastroUsuarios.php"><button>Cadastro de Usuario</button></a>';
                echo '<a href="clsProduto.php"><button>Cadastro de Produtos</button></a>';
            }
            ?>
        </div>
        <div class="main">
            <div class="container">
<!--            <div class="produto">-->
<!--                <figure class="image">-->
<!--                    --><?php
////                    include_once "clsConexao.php";
////
////                    $query="SELECT * FROM produtos";
////                    $result=Conexao::consultar($query);
////
////                    while($produto = mysqli_fetch_array($result)) {
////                    ?>
<!--                </figure>-->
<!--                <div class="info">-->
<!--                    <div class="inf">-->
<!--                        <div class="nome">--><?php
//                            echo '    <p>'.$produto['nome'].'</p>';
//                            ?><!--</div>-->
<!--                        <div class="price">--><?php
//                            echo '    <p>'.$produto['preco'].'</p>';
//                    //}
//                            ?><!--</div>-->
<!--                    </div>-->
<!--                    <div class="btn">-->
<!--                        <button>Adicionar Carrinho</button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>
            <div class="produto">
                <figure class="image">
                    <img src="./img/mouse.png" alt="Mouse">
                </figure>
                <div class="info">
                    <div class="inf">
                        <div class="nome">Mouse</div>
                        <div class="price">R$ 100,00</div>
                    </div>
                    <div class="btn">
                        <button>Adicionar Carrinho</button>
                    </div>
                </div>
            </div>
        </div>
            <div class="carrinho">
                <h1>CARRINHO</h1>
                <div>
                    <span>Mouse</span>
                    <span>R$ 100,00</span>
                </div>
                <h2>Total: R$ 100,00</h2>
            </div>
        </div>
    </div>
</div>
<script src="js/Produtos.js"></script>
</body>
</html>