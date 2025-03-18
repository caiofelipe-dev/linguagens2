<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2" align="center">Revisão - Questão 1</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $n1 = 1800;
                $n2 = 20;
                
                $soma = $n1 + $n2;
                $sub = $n1 - $n2;
                $mult = $n1 * $n2;
                $div = $n1 / $n2;
                ?>
                <tr>
                    <td>Soma</td>
                    <td>
                        <?php
                        echo $soma;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Subtração</td>
                    <td>
                        <?php
                        echo $sub;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Multiplicação</td>
                    <td>
                        <?php
                        echo $mult;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Divisão</td>
                    <td>
                        <?php
                        echo $div;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Resultado da divisão multiplicado por 2</td>
                    <td>
                        <?php
                        echo $div *= 2;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Resultado do dobro da divisão menos 50</td>
                    <td>
                        <?php
                        echo $div -= 50;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Decremento da soma</td>
                    <td>
                        <?php
                        echo --$soma;
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>

    </center>
    </body>
</html>
