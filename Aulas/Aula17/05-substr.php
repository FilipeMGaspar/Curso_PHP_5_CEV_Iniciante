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

            //funcao substr
            $site="Curso Em video";
            $sub=substr($site,0,5); //inicia no inicio da string
            //$sub=substr($site,6);// Inica do fim da string e completa até ao fim
            echo "$sub<br/>";
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>