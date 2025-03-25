<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <?php
        $nome = "Detergente";
        $valor = 900.36;
        $quantia = 2;
        
        $mult = $valor * $quantia;
        
        if($mult >= 500) {
            echo "<font color=blue>$nome tem o valor de R$$mult e é maior ou igual a 500.</font>";
        } else {
            echo "<font color=red>$nome tem o valor de R$$mult e é inferior a 500</font>";
        }
        ?>
    </center>
    </body>
</html>
