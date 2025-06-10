<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once 'Classes/Funcionario.php';
    $pessoa1 = new Funcionario("Anacudo sacudo");
    $bolsista = new Bolsista("Gabravel");

    
    if($pessoa1->setSalario(232) && $pessoa1->setCPF(444)) {
        echo "O funcionário <b>$pessoa1->nome</b>, cujo CPF é ".$pessoa1->getCPF().", possui <b>R$ ".$pessoa1->getSalario()."</b><br>";
    } else {
        echo "<br><font color=red>VALORES INVÁLIDOS</font><br>";
    }
    if($bolsista->setSalario(100) && $bolsista->setCPF(55555)) {
        echo "O funcionário bolsista <b>$bolsista->nome</b>, cujo CPF é ".$bolsista->getCPF().", possui <b>R$ ".$bolsista->getSalario()."</b><br>";
    } else {
        echo "<br><font color=red>VALORES INVÁLIDOS</font><br>";
    }

    ?>
</body>
</html>