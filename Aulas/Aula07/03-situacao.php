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
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];

            $media = ($nota1+$nota2)/2;

            echo "A média entre $nota1 e $nota2 é $media<br>";

            $sit = ($media<6) ? "REPROVADO" : "APROVADO";

            echo "<br>A Situação do aluno é: $sit";
        ?>
    </div>
</body>
</html>