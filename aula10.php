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
        $num=isset($_GET["num"])?$_GET["num"]:0;
        $oper=isset($_GET["oper"])?$_GET["oper"]:1;
    switch ($oper){
        case 1:
            $r=$num*2;
            $op="O Dobro";
            break;
        case 2:
            $r = pow($num,3);
            $op="Cubo";
            break;
        case 3:
            $r=sqrt($num);
            $op="Raiz Quadrada";
    }
    echo "A operação  $op de $num é <span class='foco'>$r</span>";
    ?>
    <!-- Fim código PHP -->
    </br></br>
    <a href="aula10.html"><h2 class="botao">Voltar</h2></a>
</div>
</body>
</html>