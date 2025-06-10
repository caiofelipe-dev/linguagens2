<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n1 = 50;
        $n2 = 100;
        $n3 = 150;
        $n4 = 200;

        $sub = $n3 - $n2;
        $mult = $n1 * $n4;
        $soma = $n4 + $mult;
        $div = $soma / 4;
        $opera = $div + $sub * 2;
        
        ?>
        <table border="1" align="center">
            <tr>
                <td>Subtração:</td>
                <td>
                    <?php
                    echo "$sub";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Multiplicação</td>
                <td>
                    <?php
                    echo "$mult";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Soma</td>
                <td>
                    <?php
                    echo "$soma";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Divisão</td>
                <td>
                    <?php
                    echo "$div";
                    ?>
                </td>
            </tr>
            <tr>
                <td>Operação</td>
                <td>
                    <?php
                    echo "$opera";
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>
