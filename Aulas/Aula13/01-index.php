<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula13 - Estrutura de Repetição For</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            for($i=1; $i<=10; $i++){
                echo $i." ";
            }

            echo "<br>";

            for ($i=10; $i>=1; $i--){
                echo $i." ";
            }

            echo "<br>";

            for($i=0; $i<=50; $i+=5){
                echo $i." ";
            }

            echo "<br>";
            for($i=20; $i>=0; $i-=2){
                print $i." ";//print é outro comando de saida
            }
        ?>
    
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>