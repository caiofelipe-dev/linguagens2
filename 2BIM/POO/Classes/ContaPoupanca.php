<?php
class contaPoupanca extends conta {
    public $data_rentabilidade;

    //criando o construtor baseado na classe pai
    function __construct($data, $ag,$num,$sal, $ren) {
        parent::__construct($data, $num, $ag, $sal);
        $this->data_rentabilidade = $ren;
    }

    //utilizando o método sacar da classe pai
    function sacar($valor) {
        if ($this->saldo >= $valor) {
            //chamar o método sacar da classe pai
            parent::sacar($valor);
        }
        else {
            echo "<font color='red'>Saldo insuficiente para saque!</font><br>";
            return false;
        }
        return true;
    }
    function depositar($valor) {
        if($valor>0) {
            $this->saldo+=$valor;
        } else {
            echo "<font color='red'>Valor inválido para depósito!</font><br>";
            return false;
        }
        return true;
    }
}
?>