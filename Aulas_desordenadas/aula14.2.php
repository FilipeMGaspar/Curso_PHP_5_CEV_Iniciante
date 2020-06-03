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
        function soma(){
            $p = func_get_args(); // cria um vetor com os valores inseridos
            $t = func_num_args(); // retorna o número de elementos do vetor
            $s=0;
            for($i=0;$i<$t;$i++){
                $s+=$p[$i];
            }
            return $s;
        }
        $som=soma(5,5,5,5,5,5,5,5,5);
        echo "O Valor da soma é: $som";
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