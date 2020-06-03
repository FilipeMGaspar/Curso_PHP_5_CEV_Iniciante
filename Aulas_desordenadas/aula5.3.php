<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
    <style>
        h2{
         font: 15pt Arial;
         color: #171559;
         font-weight: bold;
        }
    </style>
</head>
<body>
<div>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        $v3 = $_GET["z"];
        $v4 = $_GET["a"];
        $v5 = $_GET["b"];
        echo "<h2>Valores recebidos X=$v1 e Y=$v2</h2>";
        echo"</br> O valor absoluto de $v2 é: ".abs($v2);
        echo "</br>O valor de $v1<sup>$v3</sup> é: ".pow($v1,$v3);
        echo "</br>O valor da raiz quadrada de $v1 é: ".(sqrt($v1));
        echo "</br> O valor arredondado de $v4 é: ".round($v4);
        echo "</br> A parte inteira de $v4 é: ".intval($v4);
        echo"</br>O valor em em moeda de $v5 é: ". number_format($v5,2)."€";
    ?>
</div>
</body>
</html>