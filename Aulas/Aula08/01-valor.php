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
            $valor = $_GET["v"];
            echo "O valor enviado foi $valor";
            $rq = sqrt($valor);
            echo "<br>A sua raiz quadrada: ".number_format($rq,2);
        ?>
        <br>
        <br>
        <a href="01-exercicio.html">Voltar</a>
    </div>
</body>
</html>