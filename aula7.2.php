<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        echo "A primeira nota do aluno foi $nota1 </br>";
        echo "A segunda nota do aluno foi $nota2</br>";
        echo "A média das duas notas foi ".(($nota1+$nota2)/2)."</br>";
        $sit = ((($nota1+$nota2)/2)<7 ? "REPROVADO" : "APROVADO");
        echo "O aluno com média de ".(($nota1+$nota2)/2)." fica $sit";
    ?>
</div>
</body>
</html>