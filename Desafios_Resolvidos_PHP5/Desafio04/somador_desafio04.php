<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio04 - Somador condicional!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $val1 = isset($_GET["tCxvalor1"]) ? $_GET["tCxvalor1"] : "nd";
            $val2 = isset($_GET["tCxvalor2"]) ? $_GET["tCxvalor2"] : "nd";

            if (($val=="nd") || ($val2=="nd")){
                echo "Impossivel Realizar a soma!";
            }else{
                echo "<h2>A soma de $val1 com $val2</h2>";
            }    
        ?>

        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>   
    </div>
</body>
</html>