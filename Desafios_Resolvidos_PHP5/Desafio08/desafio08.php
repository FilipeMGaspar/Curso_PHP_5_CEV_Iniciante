<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio08 - Soma dos números pares!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <form method="GET" action="#">
            Número: <input type="number" name="val"> <input type="submit" value="Adicionar"><br>
            <select name="numAdd" id="selNumadd" size="6">
                <?php
                    $i = 1;
                    $v = $_GET["val"];                    
                    echo "<option value='$i'>$v</option>";
                    $i++;
                ?>
            </select>
        </form>    
    </div>
</body>
</html>