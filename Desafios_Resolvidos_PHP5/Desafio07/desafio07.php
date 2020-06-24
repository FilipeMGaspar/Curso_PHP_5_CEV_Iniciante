<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio07 - Números primos entre 0 e 200!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
          <?php
                echo "<h2>Números primos entre 0 e 200.</h2>";
                $c = 1;
                while ($c<=200){
                    $numdiv = 0;
                    for ($i=1; $i<=200; $i++){
                        if ($c%$i == 0){
                           $numdiv++;
                        }
                    }
                    if ($numdiv == 2){
                        echo "$c<br>";
                    }
                   $c++;
                }
          ?>  
    </div>
</body>
</html>