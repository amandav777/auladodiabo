<?php

class Produto 
{
    // cria a """variavel"" nome
    private $nome;

    // abre o construtor

    public function __construct($nome)
    {
        $this->setNome($nome);
    }

    // pega o nome 
    public function getNome()
    {
        return $this->nome;
    }

    // seta o nome
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function listar(){
        echo "<ul>";
        // o i mostra a posição, o produto é o elemento em si
        foreach ($this->produtos as $i => $produto){
            echo "<li> {$i} - {$produto->getNome()} </li>";
        }
        echo "</ul>";
    }

    $lista->listar();
    $lista->remover($posicao)
    {
        if(is_int($posicao)){
            unset($this->produtos[$posicao]);
            return true;
        } else {
            return false;
        }
    }



}


?>