<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula06 </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $atual = $_GET["aa"];
            //echo "Ano atual é $atual e o ano anterior e ".$atual--;//posdecremento
            echo "Ano atual é $atual e o ano anterior e ".--$atual; # prédecremento
            
            $posincremento = 3;
            $preincremento = 3;

            $posdecremento = 25;
            $predecremento = 25;

            echo "<br><br>No inicio a variavel A vale $posincremento e a variavel B vale $predecremento";

            echo "<br><br>A variavel por pos-incremento A+ + tem o valor de ".$posincremento++;
            echo "<br>A variavel por pré-incremento + +A tem o valor de ".++$preincremento;
            echo "<br><br>A variavel por pos-decremento B- - tem o valor de ".$posdecremento--;
            echo "<br>A variavel por pré-decremento - -B tem o valor de ".--$predecremento;
            /*
                Comentário de várias linhas
                Esse exercicio pretende demonstrar a
                utilização de operadores de incremento e decremento
            */ 

        ?>
    </div>
</body>
</html>