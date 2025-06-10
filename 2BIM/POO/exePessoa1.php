    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Executável de Pessoa</title>
    </head>
    <body>
        <?php
        include_once "Classes/pessoa1.php";
        $p1 = new Pessoa("Caio Felipe", "001", 9944499900, 18, 1.77, 1500);
        $p2 = new Pessoa("Ediondo Carionte", "002", 51561671790, 15, 1.6, 2000);
        
        $p1->mostrar();
        $p2->mostrar();
        
        echo '<h4>Valores atualizados</h4>';
        $p1->envelhecer(10);
        $p2->envelhecer(20);
        
        $p1->crescer(0.1);
        $p2->crescer(0.05);
        
        $p1->dobrarSalario();
        $p2->dobrarSalario();
        
        $p1->alterarCPF();
        $p2->alterarCPF();
        
        $p1->mostrar(); 
        $p2->mostrar();
        ?>
    </body>
</html>
