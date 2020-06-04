<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula04</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $n =4;
            $no= "Gustavo";
            $noEx=(int)"10Gustavo";//Utilizando typeCast
            $n = 4.5;
            echo "$no<br>";
            echo "$noEx<br>";
            echo "$n<br><br>";
            //concatenação
            $nome = "Gustavo";
            $idade = 36;
            echo $nome." tem ".$idade." anos.<br>";
            // outra forma de concatenação
            $nome ="Filipe";
            $idade = "35";
            echo "<br>$nome tem $idade anos";

        ?>
    </div>
</body>
</html>