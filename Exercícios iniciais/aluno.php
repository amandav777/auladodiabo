<?php

class Aluno
{
    private $nome;
    private $ra;
    private $curso;
    private $disciplina;
    private $notaP1;
    private $notaP2;

    public function __construct($nome, $ra, $disciplina)
    {
        $this->nome = $nome;
        $this->ra = $ra;
        $this->disciplina = $disciplina;
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
    
    //ra
    
    public function getRa()
    {
        return $this->ra;
    }

    public function setRa($ra)
    {
        $this->ra = $ra;
    }


    //dsiciplina

    public function getDisciplina()
    {
        return $this->disciplina;
    }
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
    }

    //curso

    public function getCurso()
    {
        return $this->curso;
    }  
    
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    //p1

    public function getNotaP1()
    {
        return $this->notaP1;
    } 
    
    public function setNotaP1($notaP1)
    {
        $this->notaP1 = $notaP1;
    }


    //p2

    public function getNotaP2()
    {
        return $this->notaP2;
    }

    public function setNotaP2($notaP2)
    {
        $this->notaP2 = $notaP2;
    }

    //media

    public function calcularMedia()
    {
        $media = ($this->notaP1 + $this->notaP2) / 2;

        if ($media >= 7) {
            return $media . " - aprovado";
        }
        if ($media >= 5) {
            return $media . " - exame";
        }
        if ($media < 5) {
            return $media . " - reprovado";
        }
    }
}
$aluno1 = new Aluno("Beatriz Martinhão", "157896", "Matemática");
$aluno2 = new Aluno("JP Santos", "588814", "História");

$aluno1->setNotaP1(8);
$aluno1->setNotaP2(7);

$aluno2->setNotaP1(4);
$aluno2->setNotaP2(6);

echo "Aluno 1: <br/>";
echo "Nome: " . $aluno1->getNome() . "<br/>";
echo "RA: " . $aluno1->getRa() . "<br/>";
echo "Disciplina: " . $aluno1->getDisciplina() . "<br/>";
echo "Nota P1: " . $aluno1->getNotaP1() . "<br/>";
echo "Nota P2: " . $aluno1->getNotaP2() . "<br/>";
echo "Situação: " . $aluno1->calcularMedia() . "<br/>";

echo "<br/> Aluno 2: <br/>";
echo "Nome: " . $aluno2->getNome() . "<br/>";
echo "RA: " . $aluno2->getRa() . "<br/>";
echo "Disciplina: " . $aluno2->getDisciplina() . "<br/>";
echo "Nota P1: " . $aluno2->getNotaP1() . "<br/>";
echo "Nota P2: " . $aluno2->getNotaP2() . "<br/>";
echo "Situação: " . $aluno2->calcularMedia() . "<br/>";
