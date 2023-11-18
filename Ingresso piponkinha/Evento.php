<?php

class Evento
{
    private $nome;
    private $data;
    private $local;

    public function __construct($nome, $data, $local)
    {
        $this->nome = $nome;
        $this->data = $data;
        $this->local = $local;
    }

    public function getnome()
    {
        return $this->nome;
    }

    public function setnome($nome)
    {
        $this->nome = $nome;
    }


    public function getdata()
    {
        return $this->data;
    }

    public function setdata($data)
    {
        $this->data = $data;
    }

    public function getlocal()
    {
        return $this->local;
    }

    public function setlocal($local)
    {
        $this->local = $local;
    }

}
?>