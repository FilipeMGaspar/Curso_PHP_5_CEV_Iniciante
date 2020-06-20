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
    $i=1;
    while ($i<=5) {
        $n1 = $_GET["num$i"];
        echo "Número $i:  $n1</br>";
        $i++;
    }

    /*while(i<=5) {
        $$n = $_GET["num$i"];
        echo "Numero $n : $n";
        $i++; //$i=$i+1;
    } */
    ?>
    <!-- Fim código PHP -->
    </br></br>
   <form action="aula11.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form>
</div>
</body>
</html>