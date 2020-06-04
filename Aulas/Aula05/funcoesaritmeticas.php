<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula05</title>
    <link rel="stylesheet" href="_css/estilo.css">

    <style>
        h2{
            color: blue;
            font-size: 13pt;
            border-top: 0px;
        }
    </style>
</head>
<body>
    <div>
        <?php
           echo "<p>Funções aritméticos</p><br>";

           $v1 = $_GET["x"];
           $v2 = $_GET["y"];   
           
            echo "<h2>Valores recebidos: $v1 e $v2.</h2>";
            
        ?>
    </div>
</body>
</html>