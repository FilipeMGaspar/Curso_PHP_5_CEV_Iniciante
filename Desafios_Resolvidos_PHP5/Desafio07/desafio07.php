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
                $c = 1;
                while ($c<=20){
                    for ($i=1; $i<=20; $i++){
                        if ($c%$i == 0){
                            $numdiv++;
                            echo "$c é divisivel por $i<br>";
                        }
                    }
                   $c++;
                }
          ?>  
    </div>
</body>
</html>