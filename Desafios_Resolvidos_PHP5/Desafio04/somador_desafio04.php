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

            if (($val=="nd") || ($val2=="nd") || ($val1=="") || ($val2=="")){
                echo "<h2>Impossivel Realizar a soma!<h2>";
                echo "<br><h3>Os valores não foram definidos!</h3>";
            }else{
                $soma = $val1 + $val2;
                echo "<h2>A soma de <span class='foco'>$val1</span> com <span class='foco'>$val2</span> tem o valor de <span class='foco'>$soma</span></h2>";
                if($soma>20){
                    echo "<br>O resultado da soma é <span class='foco'>$soma</span> que é maior que 20.<br> Por isso vamos somar 5.";
                    $soma += 5;
                    echo "<br><br><h3>Valor da soma condicional <span class='foco'>$soma</span></h3>";
                }else{
                    
                }
            }    
        ?>

        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>   
    </div>
</body>
</html>