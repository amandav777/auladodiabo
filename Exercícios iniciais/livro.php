<?php

class Livro {
    private $titulo;
    private $quantidadePaginas;
    private $paginasLidas;

    public function __construct($titulo, $quantidadePaginas, $paginasLidas) {
        $this->titulo = $titulo;
        $this->quantidadePaginas = $quantidadePaginas;
        $this->paginasLidas = $paginasLidas;
    }

    // Titul0
    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    // qtd pag

    public function getQuantidadePaginas() {
        return $this->quantidadePaginas;
    }  
    public function setQuantidadePaginas($quantidadePaginas) {
        $this->quantidadePaginas = $quantidadePaginas;
    }

    // pg lidas

    public function getPaginasLidas() {
        return $this->paginasLidas;
    }

    public function setPaginasLidas($paginasLidas) {
        $this->paginasLidas = $paginasLidas;
    }




    public function verificarProgresso() {
        if ($this->quantidadePaginas <= 0) {
            return 0; 
        }
        return ($this->paginasLidas / $this->quantidadePaginas) * 100;
    }
}

$livro1 = new Livro("Livro 1", 200, 200);
$livro2 = new Livro("Livro 2", 2, 80);
$livro3 = new Livro("Livro 3", 40, 60);

echo "Leitura do " . $livro1->getTitulo() . ": " . $livro1->verificarProgresso() . "%<br/>";
echo "Leitura do " . $livro2->getTitulo() . ": " . $livro2->verificarProgresso() . "%<br/>";
echo "Leitura do " . $livro3->getTitulo() . ": " . $livro3->verificarProgresso() . "%<br/>";


echo "Leitura do " . $livro1->getTitulo() . " (atualizado): " . $livro1->verificarProgresso() . "%<br/>";
