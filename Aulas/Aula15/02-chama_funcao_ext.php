<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula15 - Rotinas em PHP - Parte 2</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php

            /*
                Diferença entre o include e o required  
                
                require "02funcaoext.php";  No caso de falha do arquivo o programa para e não executa mais nada

                include "02funcaoext.php"; No caso de falha do arquivo o programa continua execução
            */
            

            include "02-funcao_ext.php";          

            echo "<h1>Testando novas funções!</h1>";
            
            ola();

            mostravalor(5);

            echo "Terminando o programa.";
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>