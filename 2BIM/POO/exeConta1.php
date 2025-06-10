<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'Classes/Pessoa1.php';
        include_once 'Classes/Conta1.php';
        
        $p1 = new Pessoa("Caio Felipe S Moreira", "001", 222, 35, 1.77, 5000);
        $c1 = new Conta("10/05/2024", "555-9", "9939-1", 15000);
        
        $p1->mostrar();
        
        echo '<h4>Valores atualizados</h4>';
        $p1->envelhecer(10);
        $p1->crescer(0.1);
        $p1->dobrarSalario();
        $p1->alterarCPF();
        $p1->mostrar();
        
        echo "<br><br>Saldo bancário atual<br><br>";
        echo "<B>$p1->nome</B> conta:  <B>$c1->numero</B> tem o saldo de R$ <B>$c1->saldo</B>";
        
        $c1->depositar(25000);
        echo "<br><br>Saldo bancário atual<br><br>";
        echo "<B>$p1->nome</B> conta:  <B>$c1->numero</B> tem o saldo de R$ <B>$c1->saldo</B>";
        ?>
    </body>
</html>
