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
           $a = 3;
           $b = "3";
           
           $r1 = ($a == $b) ? "SIM" : "NÃO"; //Igual não verifica o tipo da variavel apenas o seu valor interno
          
          $r = ($a === $b) ? "SIM" : "NÃO"; // identico verifica o Tipo de variavel 


           echo "As variaveis A e B são Iguais: $r1";//Quando utilizamos ==

           echo "<br>As variaveis A e B são Identicas: $r";//Quando utilizamos ===
        ?>
    </div>
</body>
</html>