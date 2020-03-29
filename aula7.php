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
        $n1=$_GET["a"];
        $n2=$_GET["b"];
        $tipo=$_GET["op"];
        echo"Os valore inseridos foram $n1 e $n2</br>";
        // operador unário (expressão lógica)? VAlor se verdadeiro : valor se falso
        $r = ($tipo== "s") ? $n1+$n2 : $n1*$n2;
        echo "O resultado é $r"
    ?>
</div>
</body>
</html>