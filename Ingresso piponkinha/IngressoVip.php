<?php

require_once "Ingresso.php";

class IngressoVip extends Ingresso
{
    private $valorAdicional;


    public function getValorAdicional()
    {
        return $this->valorAdicional;
    }

    public function setValorAdicional($valorAdicional)
    {
        $this->valorAdicional = $valorAdicional;
    }

    public function adicionarVip()
    {
        return parent::getValor() + $this->valorAdicional;
    }

    public function apresentarVip()
    {
        echo "INGRESSO VIP<br>";
        echo "VALOR: " . $this->adicionarVip() . '<br>';
        echo "EVENTO: " . $this->getEvento() . '<br>';
    }
}

?>
