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
    <pre>
    <?php
        // trabalhar com matrizes
        $n=array(
                    array(3,4), // cria $n[0][0]=3 e $n[0][1]=4
                    array(8,2), // cria $n[1][0]=8 e $n[1][1]=2
                    array(5,0)  // cria $n[2][0]=5 e $n[2][1]=0
                );
        $n[0][1] = $n[1][0];//$n[Linha][coluna]
        print_r($n);

    ?>

    </pre>
    <!-- Fim código PHP -->
    <br/><br/>
    <!-- <a href="javascript:history.go(-1)" class="botao">voltar</a> -->
 <!-- <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>