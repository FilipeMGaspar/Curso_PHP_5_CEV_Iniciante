<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula08 - Integrando HTML5 com PHP </title>
    <link rel="stylesheet" href="_css/estilo.css">

    <?php
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
</head>
<body>
    <div>
        <?php
            echo $txt;
        ?>
    </div>
</body>
</html>