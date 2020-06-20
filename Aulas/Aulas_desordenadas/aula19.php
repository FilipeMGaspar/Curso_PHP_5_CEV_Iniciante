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
    <pre>
    <?php
        // funções para manipular vetores
        $n=array("A","J","M","X","K");
        /*foreach($n as $valor){
            echo "$valor";
        }*/
        // funcao print_r
        print_r ($n);
        echo"<br/>";
        //funcao var_dump
        var_dump($n);

        //funcao para contar os item do vetor
        echo "<br/>O Vetor tem ".count($n)." elementos<br/>";

        //funcao para colocar um elemento no fim di vetor array_push
        //$n[]="Z";// array_push($n,"Z");  //array_pop($n);
        array_push($n,"Z");
        print_r($n);
        array_pop($n);
        print_r($n);

        //funcao para adicior um elemento do inicio do vetor
        //funcao array_unshift($n,"D");
        array_unshift($n,"D");
        print_r($n);

        //funcao array_shift($n); apaga no inicio
        array_shift($n);
        print_r($n);
    ?>

    </pre>
    <!-- Fim código PHP -->
    <br/><br/>
    <!-- <a href="javascript:history.go(-1)" class="botao">voltar</a> -->
 <!-- <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>