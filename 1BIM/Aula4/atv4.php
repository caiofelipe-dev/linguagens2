<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <form method="POST">
            <input type="text" name="produto" placeholder="Nome do produto" required/><br>
            <input type="text" name="valor" placeholder="Valor do produto" required/><br>
            <input type="submit" value="enviar" />
        </form>
        <?php
            if(isset($_POST['produto'], $_POST['valor'])) {
                $nome = $_POST['produto'];
                $valor = $_POST['valor'];
                
                if ($valor <= 30 && $valor >= 1) {
                    echo "<font color=green>O produto $nome tem o valor de $valor";
                } 
                else if ($valor <= 60 && $valor >= 31) {
                    $valor /= 2;
                    echo "<font color=red>O produto $nome tem o valor de $valor";
                } else
                if ($valor <= 300 && $valor >= 61) {
                    $valor += 100;
                    echo "<font color=MidnightBlue>O produto $nome tem o valor de $valor";
                } else {
                    echo "<font color=black>O produto $nome tem o valor de ".--$valor;
                }
            }
        ?>
    </center>
    </body>
</html>
