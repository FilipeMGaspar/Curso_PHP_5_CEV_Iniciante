<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio12 - Calculadora de IMC!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <h2>Calculo do Índice de Massa Corporal - IMC</h2><br>

        <?php
            $peso = isset($_GET["peso"]) ? $_GET["peso"] : "";
            $alt = isset($_GET["altura"]) ? $_GET["altura"] : "";

            $imc = ($peso/($alt*$alt));

            echo "<h3>Para peso de ". $peso ."Kg e altura de ". $alt ."m <br><br> IMC = ". number_format($imc, 2)."Kg/m<sup>2</sup></h3>";

            if($imc<18.5){
                $sit = "Magreza";
            }elseif($imc<24.9){
                $sit = "Normal";
            }

            echo "<br><h3>Situação: <span class='foco'>$sit</span></h3>";
        ?>
        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>