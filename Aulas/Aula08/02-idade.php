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

            //utilizando o operador ternário
           $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]"; // isset verifica se o valor foi recebido através do formulário
           
           $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;

           $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não Informado]";
           
           $idade = date("Y") - $ano;

           echo "$nome e do género $sexo e tem $idade anos";
        ?>
        <br><br>
        <a href="02-exercicio.html">Voltar</a>
    </div>
</body>
</html>