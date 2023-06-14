<?php
require_once "../config/Carrinho.php";


if (isset($_GET['item'])) {
    $item = $_GET['item'];
    $carrinho = new Carrinho();
    $carrinho->removerProduto($item);
}

header("Location: ./carrinho.php");

?>
