<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include_once 'Classes/Motos.php';

        // Criando três motos
        $moto1 = new motos("Yamaha MT-07", "Azul", 689, 2);
        $moto2 = new motos("Honda CB 500F", "Vermelho", 471, 2);
        $moto3 = new motos("Kawasaki Ninja 650", "Verde", 649, 2);

        $moto1->ImprimirValores();
        $moto2->ImprimirValores();
        $moto3->ImprimirValores();

        $moto1->AumentarCilindrada(100);

        echo "Após o aumento da cilindrada:<br>";
        $moto1->ImprimirValores();

    ?>
</body>
</html>