<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula06 </title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $a = 3;
           $b = $a;          
           $b += 5;

           $c = 5;
           $d = &$c;
           $d += 5; 
           echo "A variavel A vale $a";
           echo "<br>A variavel B vale $b";
           echo "<br>Referenciada pela variavel D. A variavel C vale $c"; 
           echo "<br>Referenciada á variavel C. A variavel D vale $d";
        ?>
    </div>
</body>
</html>