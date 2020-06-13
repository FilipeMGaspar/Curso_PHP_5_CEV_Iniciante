<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula12 - Estrutura de Repetição Do While</title>
    <link rel="stylesheet" href="_css/estilo.css">
    
    <style>
        h1{
            font-size: 16pt;
        }
    </style>

</head>

<body>
    <div>
        <?php
            $tab = isset($_GET["numtab"]) ? $_GET["numtab"] : 1;

            echo "<h1>Tabuada do $tab</h1>";
            $c =1;
            do{
                $r = $tab * $c;
                echo "$tab X $c = $r<br>";
                $c++;
            }while($c<=10);

        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>