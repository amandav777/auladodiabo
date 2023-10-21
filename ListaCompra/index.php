<?php
// Inclua as classes necessárias
require_once "Produto.php";
require_once "ListaCompra.php";

echo "<h2>Lista de compras</h2>"


// criou novos objetos da classe produto

$salgado = new Produto("Coxinha Frango Catupiry");
$bebida = new Produto("Monster Mango Loco");
$doce = new Produto("Doce de abacaxi");

// vai juntar num array os produtos

$lista = new ListaCompra();

$lista->listar()

// Inserir os produtos na lista de compras

if ($lista->inserir($salgado)) {
    echo "Produto {$salgado->getNome()} inserido";
} else {
    echo "Erro ao inserir produto";
}

if ($lista->inserir($bebida)) {
    echo "Produto {$bebida->getNome()} inserido";
} else {
    echo "Erro ao inserir produto";
}

if ($lista->inserir($doce)) {
    echo "Produto {$doce->getNome()} inserido";
} else {
    echo "Erro ao inserir produto";
}

?>