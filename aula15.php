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
      // passagem de valores por parametros
        function teste($x){
            $x+=2;
            echo"Passagem de valores por parametros<br/>";
            echo "O valor de X é $x";
        }
        $a=3;
        teste($a);
        echo "<br/>O Valor de A é $a<br/>";

     //passagem de valores por referencia
    function tst(&$y){
        echo "<br/>Passagem de valores por referencia<br/>";
        $y+=4;
        echo "O valor de Y é $y";
    }
    $b=3;
    tst($b);
    echo "<br/>O valor de B é $b";
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