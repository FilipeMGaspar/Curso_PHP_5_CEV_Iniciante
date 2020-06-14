<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula15 - Rotinas em PHP - Parte 2</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            //A função teste($x) recebe a passagem por valor não sendo alterado o valor da variavel no corpo do programa
            function teste($x){//Passagem por valor
                $x+=2;
                echo "<p>O valor de x é $x</p>";
            }    

            //a Função tstref(&$v) recebe a passagem por referencia á variavel alterando o seu valor no corpo do programa
            function tstref(&$v){//passagem por referencia
                $v += 2;
                echo "<p>O valor da variavel v é $v</p>";
            }

            //Utiliação de Função com passagem de variavel por valor 
            $a = 3;//Passagem por valor
            teste($a);//Passagem por valor
            echo "<p>O valor de a é $a</p>";

            //Utilização de Função com passagem de variavel por referência 
            $b = 3;//passagem por referencia
            tstref($b);//passagem por referencia
            echo "<p>O valor da variavél B é $b</p>";
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>