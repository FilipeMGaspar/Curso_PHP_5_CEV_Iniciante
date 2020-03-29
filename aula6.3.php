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
     //  utilização de variaveis de variaveis
     //
    /*$site = "cursoemvideo";
    $$site = "cursophp"; //cria a variavel com o nome cursoemvideo
    */
    $x = "abc";
    $$x = "def"; // variavel de variavel de nome abc
    echo "A variavel 'X' tem o valor de:  $x</br>";
    echo "A variavel criada $x tem o valo de:  $abc ";
    ?>
</div>
</body>
</html>