<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula11 - Estrutura de Repetição While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>    
       <form method="GET" action="02-ex_parte2.php">
           <?php
                $c=1;
                while($c<=5){        
                    echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br>";
                    $c++;
                }
            ?>
            <input type="submit" class="botao" value="Enviar">
       </form> 
       
    <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    -->
    </div>
</body>
</html>