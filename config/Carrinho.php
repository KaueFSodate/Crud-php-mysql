<?php 

class Carrinho {
    
    public function adicionarProduto($produto) {
        session_start();
        
        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
        }
        
        $indice = count($_SESSION['carrinho']);
        $produto['id'] = $indice;
        $_SESSION['carrinho'][$indice] = $produto;
    }
    
    public function removerProduto($item) {
        session_start();
        
        if (isset($_SESSION['carrinho'])) {

            $produtos = $_SESSION['carrinho'];
            
            
            if (isset($produtos[$item])) {
                unset($_SESSION['carrinho'][$item]);
            }

        }
    }
}


?>