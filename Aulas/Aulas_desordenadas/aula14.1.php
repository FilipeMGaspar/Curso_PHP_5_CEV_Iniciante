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
       function som ($a,$b){
           $s=$a+$b;
           return $s;
       }
        $n1 = isset($_GET["num1"]) ? $_GET["num1"] : 0;
        $n2 = isset($_GET["num2"]) ? $_GET["num2"] : 0;
        $soma=som($n1,$n2);
        echo "A soma de <span class='foco'>$n1</span> com <span class='foco'>$n2</span> tem o valor de <span class='foco'>$soma</span>";
    ?>
    <!-- Fim código PHP -->
    <br/><br/>
    <a href="javascript:history.go(-1)" class="botao">voltar</a>
 <!-- <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>