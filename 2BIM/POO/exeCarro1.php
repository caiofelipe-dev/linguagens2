<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once "Classes/Carros1.php";
        
        $c1 = new Carros;
        $c2 = new Carros;
        $c3 = new Carros;
        
        $c1->inserirDados("Fusca", "Azul", 36, "Thecnic Aro 15");
        $c2->inserirDados("Uno", "Vermelho", 77, "Pirelli Aro 15");
        $c3->inserirDados("Gol", "Preto", 50, "Pirelli Aro 15");
        
        $c1->imprimirDados();
        $c2->imprimirDados();
        $c3->imprimirDados();
        
        echo "<h3>Atualizados:</h3>";
        $c3->aumentarPotencia(10);
        $c3->imprimirDados();
        ?>
    </body>
</html>
