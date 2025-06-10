<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercício</title>
    </head>
    <body>
        <?php
        $n1 = 10;
        $n2 = 100;
        $n3 = 1000;
        
        $soma = $n1 + $n2 + $n3;
        $sub = $n3 - $n2;
        $mult = $n1 * $n2;
        $div = $n3 / $n1;
        
        echo "Soma de geral ", $soma, "<br>";
        echo "$n3 - $n2 = $sub<br>";
        echo "Multiplicação de $n1 vezes $n3: $mult<br>";
        echo "$n3 dividido por $n1 é $div<br><br>";
        
        $hello = "Hello World";
        $sla = "hello";
        
        echo $$sla;
        
        ?>
    </body>
</html>
