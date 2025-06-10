<?php
class Pessoa {
    //atributos publicos 
    public $nome;
    public $codigo;
    public $idade;
    public $altura;
    public $salario;
    public $cpf;
    public $data_abertura;
    public $agencia;
    public $numero;
    public $saldo;


    function __construct($nom,$cod,$id,$alt,$sal,$cpf,$data,$ag,$num,$sald) {
        $this->nome=$nom;
        $this->codigo=$cod;
        $this->idade=$id;
        $this->altura=$alt;
        $this->salario=$sal;
        $this->cpf=$cpf;
        $this->data_abertura=$data;
        $this->agencia=$ag;
        $this->numero=$num;
        $this->saldo=$sald;
    }
       
    
    //criar metodos 
    function ImprimirValores() {
        echo "Codigo: $this->codigo<br>";
        echo "Nome: $this->nome<br>";
        echo "Idade:$this->idade<br> ";
        echo "Altura:$this->altura<br> ";
        echo "Salario:$this->salario<br> ";
        echo "Cpf:$this->cpf<br><br>";
        echo "Data de Abertura: $this->data_abertura<br>";
        echo "Agencia: $this->agencia<br>";
        echo "Numero: $this->numero<br>";
        echo "Saldo: $this->saldo<br>";
    }
    function Envelhecer($id) {
        if ($id>0) 
        {
         $this->idade+=$id;
        }
    }
    function Crescer($cm) {
        if ($cm>0) 
        {
         $this->altura+=$cm;
        }
    }
    function AumentarSalario($vlr) {
        if ($vlr>0) 
        {
         $this->salario*=$vlr;
        }
    }

    function AlterarCPF() {
        if ($this->cpf > 10) {
            $this->cpf *= 3;
        }
        else {
            echo "<font color=red>CPF INVALIDO </font><br>";
        }
    }
}
?>