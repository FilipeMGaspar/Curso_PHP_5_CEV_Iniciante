<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula16 - Funções String em PHP</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
             // funções para manipular strings função wordwrap()
             $txt="Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função wordwrap";
             $r= wordwrap($txt,20,"<br/>\n",false); // não permite que a linha seja cortada a meio da palavra
            echo $r;
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>