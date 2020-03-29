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
     // utilização de variaveis referenciadas
        $a = 3;
        $b = $a;
        $b += 5;
        echo "A variavel 'A' vale $a</br>";
        echo "A variavel 'B' vale $b</br>";
        $x = 4;
        $y = &$x; //&$x cria uma referencia á variavel x
        $y +=6;
        echo "A variavel 'X' vale $x</br>";
        echo "A VAriavel 'Y' vale $y";
    ?>
</div>
</body>
</html>