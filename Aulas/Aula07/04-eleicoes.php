<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula07</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $ano = $_GET["an"];
           $idade = 2020 - $ano;
           
           echo "Quem nasceu no ano $ano tem $idade anos de idade";

           
        ?>
    </div>
</body>
</html>