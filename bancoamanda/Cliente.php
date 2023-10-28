<?php

class Cliente{

    private $nome;
    private $email;
    private $endereco;
    private $telefone;

    public function __construct($nome, $email, $endereco, $telefone){
        $this->setNome($nome) = $nome;
        $this->setEmail($email) = $email;
        $this->setEndereco($endereco) = $endereco;
        $this->setTelefone($telefone) = $telefone;
    }

    // nome

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    // email

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    // endereco

    public function getEndereco(){
        return $this->endereco;
    
    public function setEndereco($endereco){
        $this->email = $nome;
    }

    // telefone
  
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

}}

?>