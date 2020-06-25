<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio08!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>     
        <form method="GET" action="soma-pares-desafio08.php">
            <?php
                for ($i=1; $i<=10; $i++){
                    echo "Número $i: <input type='number' name='val$i' min='0' class='insnum' required><br>";
                }
                
            ?>
            <br>
            <input type="submit" class="botao" value="Verificar"> 
        </form>
           
    </div>
    
</body>
</html>