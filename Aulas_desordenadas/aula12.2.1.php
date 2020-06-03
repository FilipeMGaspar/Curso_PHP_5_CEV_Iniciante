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
        $t=isset( $_GET["tab"])?$_GET["tab"]:1;
        echo "Tabuada do $t </br></br>";
        do{
            $tbd= $t*$i;
            echo "$t * $i = $tbd</br>";
            $i++;
        }while($i<=10);
    ?>
    <!-- Fim código PHP -->
    </br>
  <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form>
</div>
</body>
</html>