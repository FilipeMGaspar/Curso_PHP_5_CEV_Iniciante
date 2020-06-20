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
        $ano=$_GET["an"];
        $anoatual=2018;
        echo "Quem nasceu no $ano tem ".($anoatual-$ano)." anos</br>";
        //$tipo = (($anoatual-$ano))>=18 ? "OBRIGATORIO" : "NAO OBRIGATORIO";
    // Utilização do AND &&
        $tipo = (($anoatual-$ano)>=18 && ($anoatual-$ano)<=65 ) ? "OBRIGATORIO" : "NAO OBRIGATORIO" ;
        echo "Voce que nasceu em $ano o seu voto é ".$tipo ;
    ?>
</div>
</body>
</html>