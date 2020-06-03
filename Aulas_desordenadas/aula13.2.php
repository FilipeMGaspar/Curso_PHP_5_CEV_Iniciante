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
        $n=isset($_GET["num"])?$_GET["num"]:0;
        echo"<h3>Verificar o numero $n</h3>";
        echo "Multiplos: ";
        for($i=1;$i<=$n;$i++){
            if($n%$i==0){
                $cont++;
                echo " $i  ";
            }
        }
        echo "<br/>Total de Multiplos: $cont<br/>";
        if($cont==2){
            $primo="É primo!";
        }
        else{
            $primo="Não é primo!";
        }
        echo"O número $n <span class='foco'>$primo</span>";
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