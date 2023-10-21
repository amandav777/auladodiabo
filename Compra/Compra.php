<?php

class Compra
{
    private $cliente;
    private $produto;
    private $qtd;

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }

    public function getProduto()
    {
        return $this->produto;
    }

    public function setProduto($produto)
    {
        $this->produto = $produto;
    }

    public function getQtd()
    {
        return $this->qtd;
    }

    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }

    public function fazerCompra
    
    {
        // Validação do cliente
        if (!empty($cliente->getNome())) {
            $this->setCliente($cliente);
        } else {
            return false;
        }

        // Validação do produto
        if (!empty($produto->getNome()) and $produto->getPreco() > 0) {
            $this->setProduto($produto);
        } else {
            return false;
        }

        // Validação da quantidade
        if ($qtd > 0) {
            $this->setQtd($qtd);
        } else {
            return false;
        }

        return true; // Retorna true apenas se todas as validações passarem
    }

    public function total()
    {
        return $this->produto->getPreco() * $this->qtd;
    }
}

?>