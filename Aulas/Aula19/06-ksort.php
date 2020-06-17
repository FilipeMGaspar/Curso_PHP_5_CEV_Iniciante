<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula18 - Vetores e Matrizes - Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            $vet = array(
                        2=> "A",
                        5=> "J",
                        0=>"M",
                        3=> "X",
                        4=>"k");
              
            print_r($vet);

            //Função ksort() ordena os indices do vetor por ordem crescente
            ksort($vet);
            echo "<br><br>";
            print_r($vet); 
            
            echo "<br><br>";
            //Função krsort() ordena os indices do vetor por ordem decrescente    
            krsort($vet);
            print_r($vet);
        
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>