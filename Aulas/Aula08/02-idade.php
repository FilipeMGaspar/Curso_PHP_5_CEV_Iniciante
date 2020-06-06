<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula08 - Integrando HTML5 com PHP </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $nome = $_GET["nome"];
           $ano = $_GET["ano"];
           $sexo = $_GET["sexo"];
           
           $idade = date("Y") - $ano;

           echo "$nome e do género $sexo e tem $idade anos";
        ?>
        <br><br>
        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>
</html>