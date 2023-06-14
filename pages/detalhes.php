<?php 
    require_once ('../config/produto.php');
    $item = $_GET['item'];

   

    $oneProduct = $products[$item];
    $indice = $oneProduct['id'];
    $nome = $oneProduct['Nome'];
    $valor = $oneProduct['Valor'];
    $quantidade = $oneProduct['quantidade'];
    $imagem = $oneProduct['imagem'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes produto</title>
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
    

    <section class="section_product" style="min-height: 90vh;">
        <h2>Detalhes do produto</h2>

        <div class="product" style="box-shadow: 2px 2px 6px gray;">
            <?php 
            require_once "../config/Carrinho.php";
            
            if (isset($_POST['comprar'])) {

                // Instanciar a classe Carrinho
                $carrinho = new Carrinho();
                
                if (!isset($_SESSION['carrinho'])) {
                    // Se não existir, crie um novo array vazio
                    $_SESSION['carrinho'] = array();
                }

                // Adicione o produto atual ao carrinho
                $produto = array(
                    'item' => $item,
                    'nome' => $nome,
                    'valor' => $valor,
                    'quantidade' => $quantidade
                );

                // Adicionar o produto ao carrinho usando a classe Carrinho
                $carrinho->adicionarProduto($produto);
            }
                echo "
                <div>
                    <h3>$nome</h3>
                </div>

                <div>
                    <p>R$: $valor</p>
                </div>

                <div>
                    <p>Qtd: $quantidade</p>
                </div>
                ";
            ?>
            
        </div>
        <div class="comprar">
        <form method='POST' action=''>
                        <button type='submit' name='comprar'>Comprar</button>
                    </form>
                    <a href = './carrinho.php'>Ir para o carrinho</a>
        </div>
    </section>

    <footer style="display: flex; align-itens: center; justify-content: flex-end; font-size: 22px; font-weight: bold; color: azure;">
        <p style="margin-right:60px;"><span >Loja virtual</span> &copy; 2023</p>
    </footer>
    
</body>
</html>