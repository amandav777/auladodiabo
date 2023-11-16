<?php


class Empregado
{
    private $nome;
    private $sobrenome;
    private $setor;
    private $salario;

    public function __construct($nome, $salario, $setor, $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->setor = $setor;
        $this->salario = $salario;

        if ($salario < 0) {
            $this->salario = 0;
        }
    }


    //nome
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }


    //sobrenome
    public function getSobrenome()
    {
        return $this->sobrenome;
    }    
    
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    //setor
    public function getSetor()
    {
        return $this->setor;
    } 
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    //salario mensal anual 
    public function getSalario()
    {
        return $this->salario;
    }
    public function salarioAnual()
    {
        $salarioAnual = $this->salario * 12;
        return $salarioAnual;
    }
    


   

    public function setSalarioMensal($salario)
    {
        if ($salario < 0) {
            $this->salario = 0;
        }
    }
}


$empregado1 = new Empregado("Henrique", "Leal", "TI", 14000);
$empregado2 = new Empregado("Caio", "Saraiva", "Professor", -5); 


echo "Empregado 1: <br/>";
echo "Nome: " . $empregado1->getNome() . "<br/>";
echo "Sobrenome: " . $empregado1->getSobrenome() . "<br/>";
echo "Setor: " . $empregado1->getSetor() . "<br/>";
echo "Salário Mensal: " . $empregado1->getSalario() . "<br/>";
echo "Salário Anual: " . $empregado1->salarioAnual() . "<br/>";

echo "<br/> Empregado 2: <br/>";
echo "Nome: " . $empregado2->getNome() . "<br/>";
echo "Sobrenome: " . $empregado2->getSobrenome() . "<br/>";
echo "Setor: " . $empregado2->getSetor() . "<br/>";
echo "Salário Mensal: " . $empregado2->getSalario() . "<br/>";
echo "Salário Anual: " . $empregado2->salarioAnual() . "<br/>";
