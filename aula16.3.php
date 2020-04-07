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
        // funções para manipular strings função wordwrap()
        $txt="Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
        $r= wordwrap($txt,20,"<br/>\n",false); // não permite que a linha seja cortada a meio da palavra
        echo $r;
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