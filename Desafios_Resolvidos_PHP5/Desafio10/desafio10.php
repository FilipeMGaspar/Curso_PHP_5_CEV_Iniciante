<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio10!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <p>Calculadora de números quadráticos!</p>
         <form method="GET" action="">
             <?php
                $c=1;
                while($c<=5){
                    echo "Número $c: <input type='number' name='val$c' required><br>";
                    $c++;
                }
             ?>
            <input type="submit" class="botao" value="Calcular">
         </form>   
    </div>
</body>
</html>