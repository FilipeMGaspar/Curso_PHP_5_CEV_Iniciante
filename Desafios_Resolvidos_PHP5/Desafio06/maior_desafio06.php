<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio06 - Maior e o menor de 3 valores.</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $num1 = isset($_GET["num1"]) ? $_GET["num1"] : "nd"
            $num2 = isset($_GET["num2"]) ? $_GET["num2"] : "nd"
            $num3 = isset($_GET["num3"]) ? $_GET["num3"] : "nd"
        ?>        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>