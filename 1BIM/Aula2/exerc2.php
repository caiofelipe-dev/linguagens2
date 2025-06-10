<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $n1 = 5;
        $n2 = 10;
        $n3 = 15;
        $n4 = 20;

        $sub = $n4 - $n1;
        $mult = $n1 * $n3;
        $soma = $n2 + $mult;
        $div = $soma / 2;
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
        </table>
    </body>
</html>
