<!DOCTYPE html>
<html>
<?php
    $txt =isset ($_GET["t"]) ? $_GET["t"]:"Texto nao definido";
    $tam=isset ($_GET["tam"]) ? $_GET["tam"]: "14pt";
    $cor=isset ($_GET["cor"]) ? $_GET["cor"]: "#000000";
?>
?>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
    <style>
        span.texto {
            font-size: <?php echo $tam;?> ;
            color: <?php echo $cor;?>;
        }
    </style>
</head>
<body>
<div>
    <?php
        echo "O texto inserido foi: $txt</br>";
        echo "O tamanho da letra é: $tam</br>";
        echo "A cor escolhida foi: $cor</br></br>";
        echo "Com formatação: </br></br> <span class='texto'>$txt</span>";
    ?>
    </br></br>
    <a href="aula8.2.html"><h2>Voltar</h2></a>
</div>
</body>
</html>