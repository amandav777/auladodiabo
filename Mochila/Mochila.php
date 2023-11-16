<?php

class Mochila{

    private $itens;
    private $capacidade;

    public function __construct()
    {
        $this->itens = array();
        $this->setCapacidade = $capacidade
    }
    
    public function getItens()
        {
            return $this->itens;
        }


    public function setItens($itens)
    {
        $this->itens = $itens;
    }

    public function getCapacidade()
    {
        return $this->itens;
    }

    public function setCapacidade()
    {
        return $this->itens;
    }

    public function inserir($item)
{
    $total = count($this->itens);

    // se o total de itens for menor que a capacidade e o item nao estiver vaxzio, insere na lista
    if ($total < $this->capacidade and !empty($item->getNome())) {
        array_push($this->itens, $item);
        return true;
    // senaom nao coloca
    } else {
        return false;
    }
}
}

?>