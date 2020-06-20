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
        <form method='get' action='aula11.3.1.php'>
            <?php
                echo "<label>Número 1: </label>";
                echo "<input type='number' name='num1' min='0' max='100' value='0'/></br>";
                echo "<label>Número 2: </label>";
                echo "<input type='number' name='num2' min='0' max='100' value='0'/></br>";
                echo "<label>Contagem de: </label>";
                echo"<select name='cont'>
                    <option value='1' selected>1</option>
                    <option value='2'>2</option>
                    <option value='4'>4</option>
                    <option value='5'>5</option>
                    <option value='10'>10</option>
                    <option value='15'>15</option>
                </select>";
            ?>
            </br>
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