<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula12 - Estrutura de Repetição Do While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            echo "Contagem de 1 até 10 de 1 em 1:<br>";
            $c = 1;
            do{
                echo $c." ";
                $c++;
            }while($c<=10);

            echo "<br><br>Contagem de 10 até 0 de 1 em 1:<br>";

            $c= 10;
            do{
                echo $c." ";
                $c--;
            }while($c>=0);

           

        ?>
    <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    -->
    </div>
</body>
</html>