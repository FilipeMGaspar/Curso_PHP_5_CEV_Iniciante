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
               $cad = array("Nome"=>"ana",
                           "Idade" =>23,
                           "Peso"=>78.5);
                           
                $cad["Fuma"] = true;   
                
                foreach ($cad as $campo => $valor){
                    echo "O valor de $campo é $valor<br>";
                }
            ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>