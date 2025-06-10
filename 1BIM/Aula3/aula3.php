<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DEIXA ACONTECER NATURALMENTEEEEEEEEEE</title>
    </head>
    <body>
        <?php
         $x = 45;
         echo $x, '<br>';
         $x -= 20;
         $x += 75;
         $y = $x;
         $x *= 2;
         $y /= 2;
         echo $x, '<br>';
         echo $y, '<br>';
        ?>
        <br>
        <?php
        $a = 100;
        ++$a;
        ++$a;
        $a--;
        echo $a--, "<br>";
        echo ++$a;
        ?>
        <br>
        <?php
        $n1 = 40; $n2  = 100; 
        echo "Pré-incremetado 1 ao 40 =".++$n1."<br>";
        echo "Multiplicação imediata com 2 = <font color='blue' size='5'>".($n1*=2)."</font>";
        echo "<br>Soma =".$soma = $n2 + $n1;
        ?>
    </body>
</html>
