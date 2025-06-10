<?php
class motos
{
    public $modelo;
    public $cor;
    public $cilindrada;
    public $pneus;

    function __construct($mod,$cor,$cil,$pneu)
    {
        $this->modelo=$mod;
        $this->cor=$cor;
        $this->cilindrada=$cil;
        $this->pneus=$pneu;
    }

    function ImprimirValores()
    {
        echo "Modelo: $this->modelo<br>";
        echo "Cor: $this->cor<br>";
        echo "Motor: $this->cilindrada<br>";
        echo "Pneus: $this->pneus<br><br>";
    }
    function AumentarCilindrada($cil)
    {
        if ($cil > 0) 
        {
            $this->cilindrada+= $cil;
        } 
    }
}
?>