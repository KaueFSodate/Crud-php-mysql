<?php 
session_start();
require_once "../config/Carrinho.php";

$carrinho = $_SESSION['carrinho'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>

    <header> 
        <nav class="navigation">
            <h1 style="color: azure;">Loja virtual</h1>
            <ul>
                <li><a href="./home.php" style="text-decoration:none; color: azure;">Home</a></li>
                <li><a href="./carrinho.php" style="text-decoration:none; color: azure;">Carrinho</a></li>
                <li style="color: azure;">Sair</li>
            </ul>
        </nav>
    </header>

    <div class="section_product" style="min-height: 70vh;">
        <h2>Seu carrinho de compras</h2>

        <div class="product" style="overflow:scroll; box-shadow: 2px 2px 6px gray;">
            <?php 
                $carrinhoP = new Carrinho();
               
                
                foreach ($carrinho as $item) {
                    $id = $item['id'];
                    $itemP = $item['item'];
                    $nome = $item['nome'];
                    $valor = $item['valor'];
                    $quantidade = $item['quantidade'];
                    
                    echo "
                        <div>
                            <h3>$nome - R$: $valor - Qtd: $itemP</h3>
                            <form action='./ExcluirProduto.php' method='get'>
                                <input type='hidden' name='item' value='" . $id . "'>
                                <button type='submit'>Excluir</button>
                            </form>
                        </div>
                    ";
                  
                }
            ?>
        </div>
    </div>

    <footer style="display: flex; align-itens: center; justify-content: flex-end; font-size: 22px; font-weight: bold; color: azure;">
        <p style="margin-right:60px;"><span >Loja virtual</span> &copy; 2023</p>
    </footer>
</body>
</html>
