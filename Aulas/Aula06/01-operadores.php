<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula06</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
          echo "<h1>Operadores de atribuição</h1>";
          $preco = $_GET["p"];
          $precod = $_GET["p"];
          echo "O preço do produto é ".number_format($preco, 2)."€";
          //$preco = $preco + ($preco*10/100);
          $preco += $preco*10/100; 
          echo "<br>O preço com 10% de aumento será ".number_format($preco, 2)."€";
          $precod -= $precod*15/100;
          echo "<br>O preço com 15% de desconto será de ".number_format($precod, 2)."€";
        ?>
    </div>
</body>
</html>