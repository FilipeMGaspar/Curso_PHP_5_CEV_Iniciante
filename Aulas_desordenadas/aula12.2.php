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
    <form action="aula12.2.1.php" method="get">
        <label>Tabuada: </label>
        <select name="tab">
            <?php
                $c=1;
                do {
                     echo "<option value='$c'>$c</option>";
                    $c++;
                }while($c<=10);
            ?>
        </select>
        <input type="submit" class="botao" value="Calcular">
    </form>
    <!-- Fim código PHP -->
    </br></br>
 <!-- <form action="aula12.1.html">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>