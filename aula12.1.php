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
        $v=isset($_GET["val"])?$_GET["val"]:1;
        $cont=$v;
        $fat=1;
        echo "<h2>Calculo do factorial de $v </h2>";
        do{
            $fat=$fat*$cont;
            $cont--;
        }while($cont>=1);
    echo"Tem o valor de $fat";
    ?>
    <!-- Fim código PHP -->
    </br></br>
  <form action="aula12.1.html">
        <input type="submit" value="Voltar" class="botao"/>
    </form>
</div>
</body>
</html>