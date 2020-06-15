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
            // função strlen
            $txt="Curso Em Video";
            $tam=strlen($txt);
            echo "A string $txt tem $tam carateres<br/>";

            // funcao trim
            $nome ="   José da Silva";
            $Nnome=trim($nome);
            echo "$Nnome<br/>";

            //str_word_count
            $frase ="Eu vou estudar PHP";
            $cont=str_word_count($frase,0); // o 0 conta o número de palavras
            //$cont=str_word_count($frase,1)// o 1 cria um vetor
            //print_r($cont):
            //$cont=str_word_count($frase,2); // o 2 cria um vetor, mas as mantém com posição dentro da string
            echo "A frase $frase tem $cont palavras<br/>";

            // função explode
            $site="Curso em Video";
            $vetor=explode(" ",$site);
            print_r($vetor);
            echo"<br/>";
            
            //str_split
            $nome="Maria";
            $v=str_split($nome);
            print_r($v);

            // função Implode
            $vet[0]="Curso";
            $vet[1]="em";
            $vet[2]="Video";
            $t=implode(" ",$vet);
            echo "<br/>$t<br/>";

            

        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>