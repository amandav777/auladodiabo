<?php

class Cartao {
    private $banco;
    private $bandeira;
    private $limite;
    private $fatura;

    public function __construct($banco, $bandeira, $limite) {
        $this->banco = $banco;
        $this->bandeira = $bandeira;
        $this->limite = $limite;
        $this->fatura = 0; 
    }

    // banco
    public function getBanco() {
        return $this->banco;
    }
    
    public function setBanco($banco) {
        $this->banco = $banco;
    }

    // bandeira
    public function getBandeira() {
        return $this->bandeira;
    } 
    
    public function setBandeira($bandeira) {
        $this->bandeira = $bandeira;
    }


    //limite
    public function getLimite() {
        return $this->limite;
    } 
    
    public function setLimite($limite) {
        $this->limite = $limite;
    }

    //fatura

    public function getFatura() {
        return $this->fatura;
    }  
    
    public function totalFatura() {
        return $this->fatura;
    }

   

    public function fazerCompra($valorCompra) {

        if ($valorCompra <= ($this->limite - $this->fatura)) {
            
            $this->fatura += $valorCompra;
            return true;
        } else {
            return false;
        }
    }

  
}

$cartao1 = new Cartao("Banco Amanda", "Visa", 800);
$cartao2 = new Cartao("Banco Bia", "MasterCard", 759);

$compra1 = 500;
$compra2 = 800;
$compra3 = 300;

if ($cartao1->fazerCompra($compra1)) {
    echo "Compra realizada com sucesso!<br/>";
} else {
    echo "Compra não foi realizada por causa do limite.<br/>";
}

if ($cartao2->fazerCompra($compra2)) {
    echo "Compra realizada com sucesso!<br/>";
} else {
    echo "Compra não foi realizada por causa do limite.<br/>";
}

if ($cartao1->fazerCompra($compra3)) {
    echo "Compra realizada com sucesso!<br/>";
} else {
    echo "Compra não foi realizada por causa do limite.<br/>";
}

echo "Fatura do Cartão 1: $" . $cartao1->totalFatura() . "<br/>";
echo "Fatura do Cartão 2: $" . $cartao2->totalFatura() . "<br/>";
