<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula05</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           echo "<p>Operadores aritméticos</p><br>";

           $n1 = 3;
           $n2 = 2;
           $media = ($n1+$n2)/2;
           echo "A soma vale ".($n1 + $n2);
           echo "<br>A subtração vale ".($n1 - $n2);
           echo "<br>A Multiplicação vale ".($n1 * $n2);
           echo "<br> A divisão vale ".($n1/$n2);
           echo "<br>O resto da divisão é ". ($n1%$n2);
           echo "<br> A média é $media";
            
        ?>
    </div>
</body>
</html>