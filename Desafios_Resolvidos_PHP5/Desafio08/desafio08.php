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
                    $vet = array();
                    array_push($vet,  $_GET["val"]);   
                    foreach ($i as $valor){                 
                        echo "<option>$valor</option>";
                    }
                    //utilizar vetor para receber dados e depois colocar na lista
                ?>
            </select>
            <?php
              print_r($i);
            ?>
        </form>    
    </div>
</body>
</html>