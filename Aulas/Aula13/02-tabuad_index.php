<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula13 - Estrutura de Repetição For</title>
    <link rel="stylesheet" href="_css/estilo.css">

    <style>
        h1{
            font-size: 19pt;
        }
        select{
            width: 50px;
        }
    </style>

</head>
<body>
    <div>
        <h1>Calculadora de Tabuadas!</h1>
        <form method="GET" action="02-tabuada.php">
            Tabuada do: <select name="nrtab" id="cxnrtab">
                <?php
                   for($i=1; $i<=10; $i++){ 
                       echo "<option value='$i'>$i</option>";
                   }     
                ?>
            </select>
            <input type="submit" class="botao" value="calcular">
        </form>
       <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>