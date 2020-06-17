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

               //função array_push() adiciona elemento no fim do vetor
               array_push($v,"o"); //é o mesmo que $v[] = 7; 
               $v[]= "XP";
               echo "<br><br>";
               print_r($v);

               //função array_pop() elimina o ultimo elemento do vetor
               array_pop($v); //unset($v);              « 
               echo "<br><br>";
               print_r($v);
               
               echo "<br><br>";

               //Função  array_unshift() adiciona um elemento no inicio do vetor
               array_unshift($v, "z");
               print_r($v); 
               echo "<br><br>";
               array_shift($v);
               print_r($v);

               echo "<br>";


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