<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio02 - Média Aritemética!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
           <form method="GET" action="desafio02media.php">
                <?php
                    for($i=1; $i<=3; $i++){
                        echo "Valor $i: <input type='number' name='num$i'><br><br>";
                    }
                ?>
                <br><input type="submit" class="botao" value="Calcular Média">
           </form> 
    </div>
</body>
</html>