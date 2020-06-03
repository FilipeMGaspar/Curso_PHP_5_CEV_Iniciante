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
        // funções para manipular strings
        echo "Vetor V <br/>";
        $v[0]=4;
        $v[1]=8;
        $v[2]=3;
        print_r($v); // var_dump($v); por ser subtituido
        $v2=array(3, 7, 6, 8,11);
        echo"<br/><br/> Vetor V2<br/>";
        print_r($v2);//var_export($v2); pode ser subtituido
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