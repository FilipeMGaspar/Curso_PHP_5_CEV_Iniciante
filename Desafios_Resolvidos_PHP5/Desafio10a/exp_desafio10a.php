<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio10_A!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $base = isset($_GET["base"]) ? $_GET["base"] : "nd";
            $elev = isset($_GET["exp"]) ? $_GET["exp"] : "nd";
              var_dump($base);
              echo"<br><br>";
              var_dump($elev); 
              echo"<br><br>";

            if(($base == "nd") || ($elev == "nd")){
                echo "<h2>Não foi definida nenhuma base nem nenhum expoente!<h2>";
            }else{
                echo "<h2>Calculo de <span class='foco'>$base<sup>$elev</sup></span></h2>";
            }

        ?>

        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    </div>
</body>
</html>