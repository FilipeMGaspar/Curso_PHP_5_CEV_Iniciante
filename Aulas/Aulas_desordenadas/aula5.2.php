<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
     $a = $_GET["a"];
     $b = $_GET["b"];
        echo"<h2>Valor recebido em A= $a e em B= $b</h2>";
        echo "O valor da soma é ".($a+$b);
        echo "</br>O valor da subtracao é ".($a-$b);
        echo "</br>O valor da multiplicacao é ".($a*$b);
        echo "</br>O valor da divisao é ".($a/$b);
        echo "</br>O resto da divisao é ".($a%$b);
        echo "</br>A media é ".(($a+$b)/2);
    ?>
</div>
</body>
</html>