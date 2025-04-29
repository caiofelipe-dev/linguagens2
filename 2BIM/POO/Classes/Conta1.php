<?php

class Conta {
    public $data_abertura;
    public $agencia;
    public $numero;
    public $saldo;
    
    function inserirDados($data, $ag, $num, $sal) {
        $this->data_abertura = $data;
        $this->agencia = $ag;
        $this->numero = $num;
        $this->saldo = $sal;
    }
    
    function sacar($valor) {
        if ($valor > 0) {
            $this->saldo -= $valor;
        }
    }
    function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }
}

