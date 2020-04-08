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
        //vetor criado por ARRAY
        $n=array(3,5,8,2);
        $n[]=7;
        print_r($n);

        //vetor criado por RANGE
        $v=range(5,20,2);//5 inicio 20 fim 2 somar mais 2
        print_r($v);
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