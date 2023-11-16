<?php

require_once 'Cliente.php';
require_once 'Banco.php';
require_once 'CartaoCredito.php';

$cliente = new Cliente("Valdir", "valdirvaldirvaldir@email.com", "999999999", "Av. valdir, v4ld1r");

$banco = new Banco("Banco Henrique", "Avenida Leal, unimar", "987654321", "Gerente Caio");

$cartao = new CartaoCredito($banco, $cliente, "Card", 9000, "01/25");


$cartao->comprar(500);
$cartao->comprar(300);
$cartao->comprar(15000);


echo "Total de compras: {$cartao->getTotal()}\n";
echo "Extrato: " . ($cartao->getExtrato())"\n";
echo "Fatura: {$cartao->getFatura()}\n";
