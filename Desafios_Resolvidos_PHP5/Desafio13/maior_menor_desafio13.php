<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios para iniciantes em PHP5!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $c=1;
            $maior = isset($_GET["val1"]) ? $_GET["val1"] : "";
            $menor = isset($_GET["val1"]) ? $_GET["val1"] : "";

            if(($maior=="") || ($menor=="")){
                echo "<h1>ERRO !!! Os números não foram inseridos.</h1>";
            }else{
                while($c<=5){
                    $val = "val".$c;
                    $url = $val;
                    $$v = $_GET["val$c"];
    
                    if($$v>$maior){
                        $maior = $$v;
                    }
    
                    if($$v<$menor){
                        $menor = $$v;
                    }
                    $c++;
                }
                echo "<br><br>";
                echo "<h1>Maior e menor Número!</h1>";
                echo "<br><h2>Maior: <span class='foco'>$maior</span></h2><br>";
                echo "<h3>Menor: <span class='foco'>$menor</span></h3>"
            }           
        ?>   
             
        <br><br>
        <a href="Desafio13.html" class="botao">Voltar</a> 
        <!--
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
        -->
    </div>
    
</body>
</html>