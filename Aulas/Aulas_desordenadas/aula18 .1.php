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
    <pre>
        <table border="1"><tr>
    <?php
        //vetor criado por RANGE
        $v=range(5,20,2);//5 inicio 20 fim 2 somar mais 2
        foreach($v as $c) {
            echo "<td> $c ";
        }
    ?>
            </tr>
        </table>
    </pre>
    <!-- Fim código PHP -->
    <br/><br/>
    <!-- <a href="javascript:history.go(-1)" class="botao">voltar</a> -->
 <!-- <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>