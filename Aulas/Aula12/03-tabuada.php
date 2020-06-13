<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Aula12 - Estrutura de Repetição Do While</title>
</head>
<style>
    h1{
        font-size: 16pt;
    }
    select{
        width: 40px;
    }
</style>
<body>
<div>
    <form method="GET" action="03-calctabuada.php">
        <h1>Calculadora de tabuadas de 1 até 10!</h1>
        Tabuada do: <select name="numtab" id="cxnumtab">
            <?php
                $c = 1;
                do{
                   echo "<option value='$c'>$c</option>"; 
                   $c++; 
                }while($c<=10);
            ?>
        </select>
        <input type="submit" value="Calcular" class="botao">
    </form>
</div>
</body>
</html>
 