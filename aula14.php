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
        function soma($a,$b){
            $som = $a+$b;
            echo "A soma de <span class='foco'>$a</span> com <span class='foco'>$b</span> tem o valor de <span class='foco'>$som</span>";
        }
        $n1 = isset($_GET["num1"])?$_GET["num1"] : 0;
        $n2 =isset ($_GET["num2"])?$_GET["num2"] : 0;
        soma($n1,$n2);
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