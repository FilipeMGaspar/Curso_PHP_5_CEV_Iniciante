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
            <?php
                $v = array(3=>5, 
                1=>9,
                0=>8,
                7=>7); 
                
                unset($v[0]);//destroi a posição 0 no vetor apagando da memória

                print_r($v);
            ?>
          
        </pre>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>