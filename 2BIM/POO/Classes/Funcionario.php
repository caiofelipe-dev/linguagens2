<?php

class Funcionario {
    private $cpf;
    public $nome;
    protected $salario;

    function __construct($nom) {
        $this->nome = $nom;
    }

    function setSalario($sal) {
        if (is_numeric($sal) && $sal > 0) {
            $this->salario = $sal;
            return true;
        } else {
            return false;
        }
    }

    function getSalario() {
        return $this->salario;
    }

    function setCPF($cpf) {
        if(is_numeric($cpf) && $cpf > 0) {
            $this->cpf = $cpf;
            return true;
        } else {
            return false;
        }
    }

    function getCPF() {
        return $this->cpf;
    }
}

class Bolsista extends Funcionario {
    function __construct($nom) {
        parent::__construct($nom);
    }   

    function getSalario() {
        return $this->salario += 100;
    }

}