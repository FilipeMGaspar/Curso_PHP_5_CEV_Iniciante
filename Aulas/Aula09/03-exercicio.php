<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula09 - estrutura Condicional if</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <?php 
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $media = ($nota1 + $nota2)/2;
        if($media<5){
            $sit = "REPROVADO";
        }
        elseif($media<7){
            $sit ="EM RECUPERAÇÂO";
        }
        else{
            $sit = "APROVADO";
        }   

    ?>

<style>
        span{
            color: #386FA4;
        }
    </style>
    <!-- 
        Em falta a Formatação de cores
    -->
</head>
<body>
    <div>
        <?php            

            echo "Obteve <span>$nota1</span> valores no 1º teste <br> E <span>$nota2</span> valores no 2º Teste";
            echo"<br>Com média de $media valores.";        
           
            echo " Ficando $sit";
        ?>
        
        <br><br>
        <a href="03-exercicio.html">Voltar</a>
    </div>
   
</body>
</html>