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
            $num = isset($_GET["tCxNum"]) ? $_GET["tCxNum"] : "";

            if($num != ""){
                echo "<h2> O Número $num </h2>";
            }else{
                echo "ERRO! Não recebio nenhum número!";
            }
        ?>        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>