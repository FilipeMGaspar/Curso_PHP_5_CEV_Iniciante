<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula17 - Funções String em PHP - Parte 2</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // funcao_strtolower
            $nome="Maria Ines";
            $nome2 = strtolower($nome);
            echo "O Seu nome em minusculas $nome2<br/>";

            // funcao strtoupper
            $nome3=strtoupper($nome);
            echo "O seu nome em maiscula $nome3<br/>";
            
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>