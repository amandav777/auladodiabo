<?php

require_once "Banco.php";
require_once "Cliente.php";

class CartaoDeCredito{
    private $banco;
    private $cliente;
    private $bandeira;
    private $limite;
    private $vencimento;
    private $compras = [];

    public function __construct($banco, $cliente, $bandeira, $limite, $vencimento)
    {
        $this->banco = $banco;
        $this->cliente = $cliente;
        $this->bandeira = $bandeira;
        $this->limite = $limite;
        $this->vencimento = $vencimento;
    }

    public function getBanco()
    {
        return $this->banco;
    }

    public function setBanco($banco)
    {
        $this->banco = $banco;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getBandeira()
    {
        return $this->bandeira;
    }

    public function setBandeira($bandeira)
    {
        $this->bandeira = $bandeira;
    }

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        $this->limite = $limite;
    }

    public function getVencimento()
    {
        return $this->vencimento;
    }

    public function setVencimento($vencimento)
    {
        $this->vencimento = $vencimento;
    }

    public function comprar($valor)
    {
        if ($valor <= $this->limite) {
            $this->limite -= $valor;
            $this->compras[] = $valor;
            echo "Compra de $valor realizada com sucesso!\n";
        } else {
            echo "Limite insuficiente para realizar a compra de $valor\n";
        }
    }

    public function getTotal()
    {
        return array_sum($this->compras);
    }

    public function getExtrato()
    {
        {
            echo "Vencimento: " . $this->getVencimento() . "<br>";
            echo "Limite: " . $this->getLimite() . "<br>";
            echo "Extrato da fatura:" . "<br>";
            $this->fatura();
        }
    }

    public function getFatura()
    {
        return $this->getTotal();
    }
}















}

?>