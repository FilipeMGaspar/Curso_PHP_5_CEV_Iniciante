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
		$a = 3;
		$b = "3";
		//$r = ($a == $b)? "SIM":"Não"; Testa se são iguais idependentemente do tipo (Int; Char; Double)
		$r = ($a === $b)? "SIM":"Não"; //testa se são identicos, verifica se são do mesmo tipo (Int; Char; Double)
		echo "As Variaveis A e B são Iguais? $r"; 
    ?>
</div>
</body>
</html>