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
            echo "Ano atual é $atual e o ano anterior e ".--$atual;//prédecremento

            
        ?>
    </div>
</body>
</html>