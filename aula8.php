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
        $valor=$_GET["v"];
        echo "O valor Enviado foi $valor</br>";
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor é ".number_format($rq,2);
    ?>
    </br></br>
    <a href="aula8.html"><h2>Voltar</h2></a>
</div>
</body>
</html>