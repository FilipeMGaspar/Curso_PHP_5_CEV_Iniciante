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

            while($c<=5){
                $val = "val".$c;
                $url = $val;
                $$v = $_GET["val$c"];
                echo $$v;
                echo "<br>";
                $c++;
            }
        ?>        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>