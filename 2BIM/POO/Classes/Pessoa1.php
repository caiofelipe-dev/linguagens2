<?php
class Pessoa {
    //Atributos
    public $nome;
    public $codigo;
    public $cpf;
    public $idade;
    public $altura;
    public $salario;
    
    //Métodos
    function __construct($nom, $cod, $cpf, $idad, $alt, $sal) {
        $this->nome = $nom;
        $this->codigo = $cod;
        $this->cpf = $cpf;
        $this->idade = $idad;
        $this->altura = $alt;
        $this->salario = $sal;
    }
    
    function mostrar() {
        echo "
            <b>Código:</b> $this->codigo<br>
            <b>CPF: </b> $this->cpf<br>
            <b>Nome:</b> $this->nome<br>
            <b>Idade:</b> $this->idade<br>
            <b>Altura:</b> $this->altura<br>
            <b>Salário:</b> R$$this->salario<br>
            <br>
            ";
    }
    
    function envelhecer($qntd) {
        if($qntd>0) {
            $this->idade += $qntd;
        }
    }
    
    function crescer($cm) {
        if($cm > 0) {
            $this->altura += $cm;
        }
    }
    
    function aumentarSalario($sal) {
        if($sal > 0) {
            $this->salario += $sal;
        }
    }
    
    function dobrarSalario() {
        $this->salario *= 2;
    }
    
    function alterarCPF() {
        if($this->cpf > 10) {
            $this->cpf *= 3;
        } else {
            echo "<font color=red>CPF INVALIDO </font><br>";
        }
    }
}
?>