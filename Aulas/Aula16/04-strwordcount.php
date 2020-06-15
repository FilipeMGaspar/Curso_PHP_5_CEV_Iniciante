<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula16 - Funções String em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            //str_word_count
            $frase ="Eu vou estudar PHP agora";
            $cont=str_word_count($frase,0); // o 0 conta o número de palavras
            //$cont=str_word_count($frase,1)// o 1 cria um vetor
            //print_r($cont);
            //$cont=str_word_count($frase,2); // o 2 cria um vetor, mas as mantém com posição dentro da string
            echo "A frase $frase tem $cont palavras<br/>";

            

        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>