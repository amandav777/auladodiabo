<?php

class ListaCompra {
    private $produtos;

    // nao passa nada de parametro, seta como um array vazio
    public function __construct()
    {
        $this->produtos = array();
    }
    
    // vai pegar os produtos pra passar pra proxima funcao
    public function getProdutos()
        {
            return $this->produtos;
        }

    // com o que a funcao de cima fez (ela pegou), vai modificar esse nome, passando ele pra variavel produtos

    public function setProdutos($produtos)
    {
        $this->produtos = $produtos;
    }

    // vai criar uma função pra inserir os produtos, "tipa" ele com a classe do objeto, indica que a variavel da frente é um objeto da classe produto
    public function inserir(Produto $produto)
    {
        // Se o nome do produto não estiver vazio, insere na lista
        if (!empty($produto->getNome())) {
            // Adiciona o produto à lista
            array_push($this->produtos, $produto);
            return true; // Inserção bem-sucedida
        } else {
            return false; // Erro ao inserir o produto (nome vazio)
        }
}

}

?>