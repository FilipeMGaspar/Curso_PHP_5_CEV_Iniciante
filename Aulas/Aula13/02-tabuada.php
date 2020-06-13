<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula13 - Estrutura de Repetição For</title>
    <link rel="stylesheet" href="_css/estilo.css">

    <style>
        h1{
            font-size: 17pt;
        }
    </style>

</head>
<body>
    <div>
        <?php
            $tabnr = isset($_GET["nrtab"]) ? $_GET["nrtab"] : 1;
            
            echo "<h1>Calculo da tabuada do $tabnr</h1>";

            for($i=1; $i<=10; $i++){
                $r = $tabnr * $i;
                echo "$tabnr X $i = $r<br>";
            }

        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>