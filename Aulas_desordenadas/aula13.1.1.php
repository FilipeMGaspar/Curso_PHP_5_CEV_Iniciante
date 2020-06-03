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
        $tbd = isset($_GET["tab"]) ? $_GET["tab"] : 1;
        echo "Tabuado do $tbd</br></br>";
        for($i=1;$i<=10;$i++){
            $t=$tbd*$i;
            echo"$tbd x $i =  $t </br>";
        }
    ?>
    <!-- Fim código PHP -->
    </br></br>
    <a href="javascript:history.go(-1)" class ="botao">voltar</a>
 <!-- <form action="aula13.1.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>