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
    <form action="aula13.1.1.php" method="get">
        <label>Tabuada: </label>
        <select name="tab">
            <?php
                $i=1;
                for($i=1;$i<=10;$i++){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
       </select>
       <input type="submit" value="Verificar" class="botao" />
    </form>
    <!-- Fim código PHP -->
    </br></br>
 <!-- <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>