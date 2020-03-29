<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
    //Comentários
    /*Comentário de
    várias linhas para utilização de pós e pré incremento e decremento */
        $atual =$_GET["aa"];
        echo "O ano atual é $atual ";
        echo "</br>Com Pré-Decremento: O anterior é ".--$atual;
        $atual = $_GET["aa"];
        echo "</br>Com Pos-Decremento: O ano Seguinte é ".$atual--;
        echo "</br> Depois de utilizada o valor do ano fica $atual";
    ?>
</div>
</body>
</html>