<?php

class Cadastro {
    public $nome;
    public $salario;
    public $rg;

    public function __construct($nome, $salario, $rg) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->rg = $rg;
    }

    public function diminuirSalario() {
        if ($this->salario >= 1200) {
            $this->salario -= 1200;
        }
        return $this->salario;
    }
}

class PessoaFisica extends Cadastro {
    public $cpf;

    public function __construct($nome, $salario, $rg, $cpf) {
        parent::__construct($nome, $salario, $rg);
        $this->cpf = $cpf;
    }

    public function diminuirSalario() {
        parent::diminuirSalario();
        if ($this->salario > 5000) {
            return "O funcionário {$this->nome} de CPF {$this->cpf} tem o salário de R$ {$this->salario} e é gerente na empresa.";
        } else {
            return "O funcionário {$this->nome} de RG {$this->rg} tem o salário de R$ {$this->salario} e não é gerente na empresa.";
        }
    }
}

$cadastro1 = new Cadastro("Ana", 3000, "123456");
$cadastro2 = new Cadastro("Bruno", 1500, "234567");
$cadastro3 = new Cadastro("Carlos", 500, "345678");

echo "Cadastro 1: Nome: {$cadastro1->nome}, RG: {$cadastro1->rg}, Salário: R$ {$cadastro1->diminuirSalario()}<br>";
echo "Cadastro 2: Nome: {$cadastro2->nome}, RG: {$cadastro2->rg}, Salário: R$ {$cadastro2->diminuirSalario()}<br>";
echo "Cadastro 3: Nome: {$cadastro3->nome}, RG: {$cadastro3->rg}, Salário: R$ {$cadastro3->diminuirSalario()}<br>";

$pessoa1 = new PessoaFisica("Daniela", 7000, "456789", "111.111.111-11");
$pessoa2 = new PessoaFisica("Eduardo", 4500, "567890", "222.222.222-22");
$pessoa3 = new PessoaFisica("Fernanda", 5500, "678901", "333.333.333-33");

echo $pessoa1->diminuirSalario() . "<br>";
echo $pessoa2->diminuirSalario() . "<br>";
echo $pessoa3->diminuirSalario() . "<br>";

?>