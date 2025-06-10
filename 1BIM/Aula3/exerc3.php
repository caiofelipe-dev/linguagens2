<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>    
        <?php
        $n1 = 2480;
        $n2 = 34;
        ?>
        <center>
        <table border="1">
            <thead>
                <tr>
                    <th>Valor 1</th>
                    <th>Valor 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $n1;?></td>
                    <td><?php echo $n2;?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <?php
        $soma = $n1 + $n2;
        $sub = $n1 - $n2;
        $mult = $n1 * $n2;
        $div = $n1 / $n2;
        
        echo "<p>Soma do valor 1 pelo valor 2: ".$soma."</p>";
        echo "<p>Subtração do valor 1 pelo valor 2: ".$sub."</p>";
        echo "<p>Multiplicação do valor 1 pelo valor 2: ".$mult."</p>";
        echo "<p>divisão do valor 1 pelo valor 2: ".$div."</p>";
        echo "<br>";
        echo "<p>Resultado da soma + 60 = ".($soma1 = $soma + 60)."</p>";
        echo "<p>Resultado da soma multiplicado por 4 = ".($soma2 = ($soma+60) * 4)."</p>";
        echo "<p>Incremendo do resultado da subtração = ".($sub2 = $sub + 1)."</p>";
        ?>
        <br>
        <table border="1">
            <thead>
                <tr>
                    <th>Operação</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Soma do valor 1 pelo valor 2</td>
                    <td>
                        <?php
                        echo $soma;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Subtração do valor 1 pelo valor 2</td>
                    <td>
                        <?php
                        echo $sub;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Multiplicação do valor 1 pelo valor 2</td>
                    <td>
                        <?php
                        echo $mult;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>divisão do valor 1 pelo valor 2</td>
                    <td>
                        <?php
                        echo $div;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Resultado da soma + 60</td>
                    <td>
                        <?php
                        echo $soma1;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Resultado da soma multiplicado por 4</td>
                    <td>
                        <?php
                        echo $soma2;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Incremendo do resultado da subtração</td>
                    <td>
                        <?php
                        echo $sub2;
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
        </center>
    </body>
</html>
