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
        <?php
             //Função sort() ordena o vetor por ordem crescente
             $n = array(3,5,8,2);
             print_r($n);
             sort($n);
             echo "<br><br>";
             print_r($n);
             echo "<br><br>";   

             //Função rsort() ordena o vetor por ordem decrescente
             rsort($n);
             print_r($n);
        
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>