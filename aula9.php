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
    $ano = isset($_GET["ano"])?$_GET["ano"]:1900;
    $aatual=date(Y);
    $idade = $aatual-$ano;
    echo "O ano atual é $aatual e o ano inserido é $ano</br>Você tem $idade anos</br></br>";
    if ($idade>=18){
        $v="já pode votar";
        $d = "já pode conduzir";
    }
    else{
        $v="não pode votar";
        $d="não pode conduzir";
    }
    echo "Voce tem $idade e $v e $d";
    ?>
    </br></br>
    <a href="aula9.html"><h2>Voltar</h2></a>
</div>
</body>
</html>