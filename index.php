<?php

require_once 'Cliente.php';
require_once 'Produto.php';
require_once 'Compra.php';

echo "<h2>Sistema de Compras</h2>";

$cliente = new Cliente("João");

$produto = new Produto("Monitor 24p", 589.9);

$compra = new Compra();
$resCompra = $compra->fazerCompra($cliente, $produto, 2);

if ($resCompra){
    echo "Compra realizada com sucesso<br>";
    
} else {
    echo "Falha na compra, revise o cliente e/ou produto";
}


?>