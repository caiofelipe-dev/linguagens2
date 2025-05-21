<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
<?php
    // incluir a classe
    include_once 'classes/Pessoa1.php';
    include_once 'classes/Conta1.php';
    include_once 'classes/ContaPoupanca.php';
    include_once 'classes/ContaCorrente.php';

    $p1 = new Pessoa("Caio Felipe S Moreira", "001", 222, 35, 1.77, 5000);
    $cp1 = new ContaPoupanca("10/05/2010","1867-8","1212-12",5000,25);
    $cc1 = new ContaCorrente("10/05/2013","1867-8","1212-12",4000,200);

    echo "<br><br> Saldo atual <br>";
    echo "$p1->nome conta poupança:$cp1->numero tem o saldo de R$ $cp1->saldo <br>";
    echo "$p1->nome conta corrente:$cc1->numero tem o saldo de R$ $cc1->saldo";
    echo "<br><br> Saldos depois de saques<br><br>";

    $cp1->Sacar(1500);
    echo "$p1->nome conta poupança:$cp1->numero tem o saldo de R$ $cp1->saldo<br>";
    $cc1->Sacar(500);
    echo "$p1->nome conta corrente:$cc1->numero tem o saldo de R$ $cc1->saldo";

    echo "<br><br> Saldos depois de depositos<br><br>";
    $cp1->Depositar(25,400);
    echo "$p1->nome conta poupança:$cp1->numero tem o saldo de R$ $cp1->saldo<br>";
    $cc1->Depositar(100);
    echo "$p1->nome conta corrente:$cc1->numero tem o saldo de R$ $cc1->saldo";
?>    
</body>
</html>