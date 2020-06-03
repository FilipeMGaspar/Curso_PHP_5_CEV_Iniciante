<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <!-- inicio código PHP -->
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
        //$cont=str_word_count($frase,2); // o 2
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

        //função chr
        $letra=chr(67);
        echo "A letra de código <span class='foco'>67</span> é a letra <span class='foco'>$letra</span><br/>";

        //função ord
        $ltr="A";
        $cod=ord($ltr);
        echo "O código da letra <span class='foco'>$ltr</span> tem o código <span class='foco'>$cod</span>";
    ?>
    <!-- Fim código PHP -->
    <br/><br/>
    <!-- <a href="javascript:history.go(-1)" class="botao">voltar</a> -->
 <!-- <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>