<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <?php
        $nome = "Renato";
        $valor = 900.36;
        $quantia = 2;
        
        $result = $valor + $quantia;
        
        if($result > 1000) {
            echo "<font color=blue>$nome vendeu R$$result e é maior ou igual a 1000.</font>";
        } else {
            echo "<font color=red>$nome vendeu R$$result e é inferior a 1000</font>";
        }
        ?>
    </center>
    </body>
</html>
