<!DOCTYPE html>
<html>
<!-- Inicio código PHP -->
<?php
    $n1=isset($_GET["n1"])?$_GET["n1"]:"Sem nota definida";
    $n2=isset($_GET["n2"])?$_GET["n2"]:"Sem nota definita";
    $media=($n1+$n2)/2;
    if($media<5){
        $cor="#FF0000";
        $sit="Reprovado";
    }
    elseif($media>=5 && $media<7){
        $cor="#FF8C00";
        $sit="Em Recuperação";
    }
    else{
        $cor="#008000";
        $sit="Aprovado";

    }
?>
<!-- Fim código PHP -->
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <!-- Inicio de Estilo Css Local -->
    <style>
        span.nota{
            color: #191970;
        }
        span.situa{
            color: <?php echo $cor; ?>;
        }
    </style>
    <!-- Fim de Estilo Css Local -->
    <title></title>
</head>
<body>
<div>
    <!-- inicio código PHP -->
    <?php
        echo "A 1ª nota foi <span class='nota'>$n1</span></br>";
        echo "A 2ª nota foi <span class='nota'>$n2</span></br>";
        echo "Com a média de <span class='nota'>$media</span> fica <span class='situa'>$sit</span>";
    ?>
    <!-- Fim código PHP -->
    </br></br>
    <a href="aula9.2.html"><h2>Voltar</h2></a>
</div>
</body>
</html>