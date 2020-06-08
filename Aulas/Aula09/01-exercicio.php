<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula09 - estrutura Condicional if</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
           $a = isset($_GET["ano"]) ? $_GET["ano"] : "1900";
           $idade = date("Y") - $a;
           echo "Você nasceu em $a e terá $idade anos";
            if($dade>=18){
                $v = "já pode Votar";
                $d =  "já Pode dirigir";
            }
            else{
                $v= "não Pode Votar";
                $d = "não pode Dirigir";
            }
        ?>

        <br>
        <br>
         <a href="01-exercicio.html">Voltar</a>
    </div>
   
</body>
</html>