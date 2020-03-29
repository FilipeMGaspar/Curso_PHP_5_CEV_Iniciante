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
        $preco = $_GET["p"];
        echo "O preço do produto é ".number_format($preco,2)."€</br>";
        //$preco = $preco*0.10+$preco;
        $preco += $preco*0.10;
        echo "O preço com aumento de 10% é ".number_format($preco,2)."€</br>";
        $preco =&$_GET["p"];
        //$preco= $preco-$preco*0.10;
        $preco -= $preco*0.10;
        echo "O preco com desconto de 10% é ".number_format($preco,2)."€</br>";
    ?>
</div>
</body>
</html>