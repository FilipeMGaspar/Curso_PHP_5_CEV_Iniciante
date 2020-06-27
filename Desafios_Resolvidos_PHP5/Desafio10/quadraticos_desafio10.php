<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio10!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            for($i=1; $i<=5; $i++){
                $v = "val".$i;
                $url = $v;
                $$val = isset($_GET[$url]) ? $_GET[$url] : "nd";

                if ($$val == "nd"){
                    echo "<h2>Valores indefinidos. Impossivel Continuar</h2>";
                    $i = 5;
                }else{
                    
                }
            }
        ?>        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>