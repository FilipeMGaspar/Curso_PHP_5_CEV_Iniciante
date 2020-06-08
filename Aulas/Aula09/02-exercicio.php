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
            
           if($idade<16){
            $tipoVoto ="não vota";
           }
           else{
               if(($idade<18) || ($idade>65)){
                   $tipoVoto ="voto opcional";
               }
               else{
                   $tipoVoto = "voto obrigatório";
               }
           }

            echo "<br>Para essa idade, $tipoVoto";
        ?>

        <br>
        <br>
         <a href="02-exercicio.html">Voltar</a>
    </div>
   
</body>
</html>