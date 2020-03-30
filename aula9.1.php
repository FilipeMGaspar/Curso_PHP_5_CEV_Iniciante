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
    //echo "O ano atual é $aatual e o ano inserido é $ano</br>Você tem $idade anos</br></br>";
    if ($idade>=18 && $idade<65){
        $v="já pode votar";
    }
    elseif($idade>=16 && $idade<18 || $idade>=65){
        $v="o seu voto é opcional";
    }
    else{
        $v="não pode Votar";
    }
    echo "Voce tem $idade e $v";
    ?>
    </br></br>
    <a href="aula9.1.html"><h2>Voltar</h2></a>
</div>
</body>
</html>