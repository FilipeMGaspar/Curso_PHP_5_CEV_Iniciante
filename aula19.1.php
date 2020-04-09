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
        //função para ordenar um vetor
        $n=array("W","A","V","D","B");
        print_r($n);
        sort($n); //ordem crescente
        print_r($n);
        rsort($n); //ordem descrescente
        print_r($n);

        echo "<br/>Ordenação associativa<br/>";
        // funcao asort ordenação associariva
        asort($n);//ordem crescente
        print_r($n);
        arsort($n); //ordem decrescente
        print_r($n);

        //echo "<br/>Ordenação por chaves Indices<br/>";

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