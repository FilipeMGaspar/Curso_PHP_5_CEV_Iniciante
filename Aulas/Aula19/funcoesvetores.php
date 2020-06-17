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
               
                echo "Função print_r()<br>";
               //Função print_r 
               $v = array("a","j", "m","x","k");
               print_r($v); 
               
               echo "<br>Função var_dump()<br>";
               //função var_dump
               var_dump($v); 
               
               echo "<br>Função count()<br>";
               //funçao count()
               $tot = count($v); 
               echo "O vetor tem ". count($v) . "elementos";



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