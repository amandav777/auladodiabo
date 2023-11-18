<?php

require_once "Ingresso.php";
require_once "IngressoVip.php";

$ingressoNormal = new Ingresso(50, "Show da Pipokinha");

$ingressoVip = new IngressoVip(30, "Show da Inês Brasil");
// VAI ADICIONAR O VALOR ADICIONAL DE VEZ, setou o valor adicional
$ingressoVip->setValorAdicional(2000);

// Chamada dos métodos apresentar e apresentarVip
$ingressoNormal->apresentar();
$ingressoVip->apresentarVip();

?>
