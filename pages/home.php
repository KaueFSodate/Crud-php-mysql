<?php 

    require_once ('../config/produto.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Loja virtual</title>
</head>
<body>
    <header>
        
        <nav class="navigation">
            <h1 style="color: azure;"><a href="./home.php" style="text-decoration:none; color: azure;">Loja virtual</a></h1>
            <ul>
                <li><a href="./home.php" style="text-decoration:none; color: azure;">Home</a></li>
                <li><a href="./carrinho.php" style="text-decoration:none; color: azure;">Carrinho</a></li>
                <li style="color: azure;">Sair</li>
            </ul>
        </nav>
    </header>

    <main class="container">
        

        <section class="section_products">
            <?php 
            for($i = 0; $i < count($products); $i++)
            {
                $item = $products[$i]['item'];
                $nome = $products[$i]['Nome'];
                $valor = $products[$i]['Valor'];
                $quantidade = $products[$i]['quantidade'];
                $imagem = $products[$i]['imagem'];
                
                echo "<a href='./detalhes.php?item={$item}'><div style='width: 270px;'>
                    <img src='$imagem' alt='Imagem do produto' class='img_products'>
                    <h3 style='text-align: center; color: azure;'>$nome</h3>
                    <p style='color: azure;'>Nome: $nome</p>
                    <p style='color: azure;'>Valor: $valor</p>
                    <p style='color: azure;'>Quantidade: $quantidade</p>
                </div> </a>"
                ;
            }  
            ?>
        </section>


    </main>

    <footer style="display: flex; align-itens: center; justify-content: flex-end; font-size: 22px; font-weight: bold; color: azure;">
        <p style="margin-right:60px;"><span >Loja virtual</span> &copy; 2023</p>
    </footer>
    
</body>
</html>