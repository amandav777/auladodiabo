<?php

class Vendedor
{
    private $nome;
    private $email;
    private $salarioBase;
    private $porcentagemComissao;
    private $totalVendido;

    public function __construct($nome, $email, $salarioBase, $porcentagemComissao)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->salarioBase = $salarioBase;
        $this->porcentagemComissao = $porcentagemComissao;
        $this->totalVendido = 0; 
    }

    // nome
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    // email
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    //salario base
    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase)
    {
        $this->salarioBase = $salarioBase;
    }

    //salario comissionado
    public function getPorcentagemComissao()
    {
        return $this->porcentagemComissao;
    }

    public function setPorcentagemComissao($porcentagemComissao)
    {
        $this->porcentagemComissao = $porcentagemComissao;
    }

    public function fazerVenda($valorVenda)
    {
        if ($valorVenda >= 0) {
            $this->totalVendido += $valorVenda;
            return true;
        } else {
            return false;
        }
    }

    public function salarioTotal()
    {
        $comissao = ($this->porcentagemComissao / 100) * $this->totalVendido;
        return $this->salarioBase + $comissao;
    }
}

$vendedor1 = new Vendedor("Valdir", "valdir@professor.com", 9000, 12);
$vendedor2 = new Vendedor("Caio", "caio@professor.com", 3400, 5);

$venda1 = 500;
$venda2 = 2000;
$venda3 = -100; 

if ($vendedor1->fazerVenda($venda1)) {
    echo "Venda realizada no valor de {$venda1} <br/>";
} else {
    echo "Valor negativo, venda cancelada. <br/>";
}

if ($vendedor2->fazerVenda($venda2)) {
    echo "Venda realizada no valor de {$venda2} <br/>";
} else {
    echo "Valor negativo, venda cancelada. <br/>";
}

if ($vendedor1->fazerVenda($venda3)) {
    echo "Venda realizada no valor de {$venda3} <br/>";
} else {
    echo "Valor negativo, venda cancelada. <br/>";
}

echo "Salário total de " . $vendedor1->getNome() . ": $" . $vendedor1->salarioTotal() . "<br/>";
echo "Salário total de " . $vendedor2->getNome() . ": $" . $vendedor2->salarioTotal() . "<br/>";