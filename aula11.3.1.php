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
        $n1=isset($_GET["num1"])?$_GET["num1"]:0;
        $n2=isset($_GET["num2"])?$_GET["num2"]:0;
        $cont=isset($_GET["cont"])?$_GET["cont"]:0;
       /* echo "Número 1: $n1</br>";
        echo "Número 2: $n2</br>";
        echo "Contagem: $cont</br>";*/
        if ($n1>$n2){
            $aux=$n1;
            while($aux>=$n2){
                echo  "$aux</br>";
                $aux-=$cont;
            }
        }
        elseif ($n1==$n2){
            $aux= "Os Dois valores são iguais";
        }
        else{
            $aux=$n2;
            while($n1<=$aux){
                echo "</br>$n1";
                $n1+=$cont;
            }
        }
    ?>
    <!-- Fim código PHP -->
    </br></br>
   <form action="aula11.3.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form>
</div>
</body>
</html>