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
            // função strlen
            $txt="Curso Em Video";
            $tam=strlen($txt);
            echo "A string $txt tem $tam carateres<br/>";

            // funcao trim
            $nome ="   José da Silva";
            $Nnome=trim($nome);
            echo "$Nnome<br/>";

            
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>