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
        <form method='get' action='aula11.2.1.php'>
            <?php
            $n=1;
                while ($n<=5) {
                    echo "<label>Número $n: </label>";
                    echo "<input type='number' name='num$n' max='100' min='0'/></br>";
                    $n++; //$n+=1; ou $n=$n+1;
                }
            ?>
            <input type='submit' class='botao' value='Verificar' />
        </form>
    <!-- Fim código PHP -->
    </br></br>
   <!-- <form action="aula11.html">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>