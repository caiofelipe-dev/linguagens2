<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center>
        <form method="POST">
            <input type="text" name="fruta" value="" />
            <input type="submit" value="enviar" />
        </form>
        <img src="<?php
        if(isset($_POST['fruta'])) {
            $fruta = $_POST['fruta'];  
            if($fruta == 'pera') {
                echo "https://healthjade.net/wp-content/uploads/2017/10/pear-1024x768.jpg";
            } 
            else if($fruta == 'maçã') {
                echo 'https://www.mundoecologia.com.br/wp-content/uploads/2019/03/Ma%C3%A7%C3%A3-%C3%A9-Vermelha-1.jpg';
            }
            else if($fruta == 'uva') {
                echo 'https://th.bing.com/th/id/OIP.6FGdhKXonVCUH8dncskvpQHaJN?rs=1&pid=ImgDetMain';
            } 
            else if($fruta == 'banana') {
                echo 'https://th.bing.com/th/id/OIP.fq6VMNnUgGmrWCmjrE6WsQHaGG?rs=1&pid=ImgDetMain';
            } else {
                echo "https://thumbs.dreamstime.com/b/carimbo-de-borracha-inv%C3%A1lido-83441025.jpg";
            }
        } else if(!isset($_POST['fruta'])) {
            echo "https://www.codeproject.com/KB/Blogs/5300621/NULL.jpg";
        }
        
        ?>" width='200px'>
    </center>
    </body>
</html>
