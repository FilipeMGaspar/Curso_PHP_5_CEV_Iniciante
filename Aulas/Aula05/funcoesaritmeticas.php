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
            font-size: 14pt Arial;
            margin-top: 0px;
            font-weight: bold;
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
           
            echo "<br>O valor absoluto de $v2 é ". abs($v2);            
           
            echo "<br> O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);

            echo "<br>A raiz de $v1 é ". sqrt($v1);

            echo "<br> o Valor de $v2 arredondado é ". round($v2);// ceil arredonda para cima (por excesso): floor arredonda pra baixo (por defeito)

            echo "<br> a parte inteira de $v2 é ". intval($v2);

            echo "<br>O valor de $v1 em moeda é €". number_format($v1,2);
        ?>
    </div>
</body>
</html>