<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula18 - Vetores e Matrizes - Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <pre>
            <table border="1"><tr>
            <?php
                $c = range(5,20,2);//5 inicio , 20 final, 2 somador
                //print_r($c);
                
                foreach ($c as $valor){
                    echo "<td>$valor ";
                }
            ?>
            </table>
        </pre>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>