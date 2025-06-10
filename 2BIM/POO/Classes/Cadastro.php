<?php
Class Cadastro {
    public $nome;
    public $salario;
    public $rg;

    function __construct($nome, $salario, $rg) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->rg = $rg;
    }

    function diminuirSalario($valor) {
        if ($this->salario >= 1200) {
            $this->salario -= $valor; 
        } else {
            echo "<font color=red>(Salário Inválido)</font> ";
        }
    }
}

class PessoaFisica extends Cadastro {
    public $cpf;

    function __construct($nome, $salario, $rg, $cpf) {
        parent::__construct($nome, $salario, $rg);
        $this->cpf = $cpf;
    }

    function diminuirSalario($valor) {
        parent::diminuirSalario($valor);
        if ($this->salario > 5000) {
            $this->salario -= $valor; 
            echo "O funcionário $this->nome tem o salário de R$$this->salario e é gerente na empresa.<br>";
        } else {
            echo "O funcionário $this->nome de RG $this->rg tem o salário de R$$this->salario e não é gerente na empresa.<br>";
        }
    }
}