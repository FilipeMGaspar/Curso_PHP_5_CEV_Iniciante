<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula12 - Estrutura de Repetição Do While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h1>Calculo do Fatorial de $v</h1>";
            $fact = 1;
            $c = $v;
            
            do{
                $fact *= $c;
                $c--;                
            }while($c>=1); 

            echo "<h2>$v! = $fact</h2>";

        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>