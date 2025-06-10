<?php

class Carros {
    public $modelo;
    public $cor;
    public $motor;
    public $pneus;
    
    function inserirDados($model, $color, $engine, $tire) {
        $this->modelo = $model;
        $this->cor = $color;
        $this->motor = $engine;
        $this->pneus = $tire;
    }
    
    function imprimirDados() {
       echo "<b>Modelo:</b> $this->modelo.<br>";
       echo "<b>Cor:</b> $this->cor.<br>";
       echo "<b>Motor:</b> $this->motor cv.<br>";
       echo "<b>Pneus:</b> $this->pneus.<br>";
       echo "<br>";
    }
    
    function aumentarPotencia($valor) {
        if ($valor > 0) {
            $this->motor += $valor;
        }
    }
}
