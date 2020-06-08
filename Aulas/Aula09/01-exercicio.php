<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula09 - estrutura Condicional if</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
           echo "Você nasceu em $a";
        ?>
    </div>
    <br>
    <br>
    <a href="01-exercicio.html"><p>Voltar</p></a>
</body>
</html>