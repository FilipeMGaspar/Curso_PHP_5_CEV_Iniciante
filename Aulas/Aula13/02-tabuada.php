<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula13 - Estrutura de Repetição For</title>
    <link rel="stylesheet" href="_css/estilo.css">

    <style>
        h1{
            font-size: 19pt;
        }
    </style>

</head>
<body>
    <div>
        <?php
            $tabnr = isset($_GET["nrtab"]) ? $_GET["nrtab"] : 1;
            
            echo "<h1>Tabuada do $tabnr</h1>";

        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>