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
            /*
            Operador unário
                expreção ? Verdadeiro   : Falso

                $maior =  $a > $b ? $a : $b;

                $r = $a>$b ? $a+$b : $a-$b;

                $sit = $m<7 ? "recuperação" : "aprovado";
            */
              $n1 = $_GET["a"];
              $n2 = $_GET["b"];
              $tipo = $_GET["op"];  

              echo "Os valores passados foram $n1 e $n2 <br>";

              $r = ($tipo== "s") ? $n1+$n2 : $n1*$n2;//tipo s é soma

                echo "O resultado será $r";
              

        ?>
    </div>
</body>
</html>