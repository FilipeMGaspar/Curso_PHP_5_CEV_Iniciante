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
            
           $v = array("a","j", "m","x","k");
           print_r($v); 
             echo "<br><br>";
           //Função  array_unshift() adiciona um elemento no inicio do vetor
             array_unshift($v, "z");
             print_r($v); 
             echo "<br><br>";
            
              //Função  array_shift() apaga o elemento do inicio do vetor
             array_shift($v);
             print_r($v);

             echo "<br>";
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>