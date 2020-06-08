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
            
           if($dade >= 18){
                $v = "já pode votar";
                $d =  "já pode dirigir";
            }
            else{
                $v= "não pode votar";
                $d = "não pode dirigir";
            }

            echo "<br> Com essa idade você $v e também $d";
        ?>

        <br>
        <br>
         <a href="01-exercicio.html">Voltar</a>
    </div>
   
</body>
</html>