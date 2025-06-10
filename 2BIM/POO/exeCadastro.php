<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão Geral</title>
</head>
<body>
    <?php
    include_once "Classes/Cadastro.php";

    $c1 = new Cadastro("Caio Felipe", 3000, 1232);
    $c2 = new Cadastro("Edinaldo Pereira", 1200, 1111);
    $c3 = new Cadastro("Pimenta Biquinho", 7000, 346);

    $pf1 = new PessoaFisica("Eduarda Oreia Seca",6000,4343, "0540540954");
    $pf2 = new PessoaFisica("Davi", 1200, 666, "32342r43tr43");
    $pf3 = new PessoaFisica("Julia Tonhona", 999, 3232, "329er32-ir32");

    
    $c1->diminuirSalario(100);
    $c2->diminuirSalario(1);
    $c3->diminuirSalario(20);

    echo "Funcionário $c1->nome RG $c1->rg tem o salário de R$$c1->salario<br>";
    echo "Funcionário $c2->nome RG $c2->rg tem o salário de R$$c2->salario<br>";
    echo "Funcionário $c3->nome RG $c3->rg tem o salário de R$$c3->salario<br><br>";
    
    $pf1->diminuirSalario(100);
    $pf2->diminuirSalario(1);
    $pf3->diminuirSalario(20);
    ?>
</body>
</html>