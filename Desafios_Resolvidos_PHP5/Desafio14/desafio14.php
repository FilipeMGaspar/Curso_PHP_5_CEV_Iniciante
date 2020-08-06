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
                echo "<h2> O Número <span class='foco'>$num</span> </h2>";

                if($num%3 == 0){
                   $multDeTres = "É Multiplo de 3"; 
                }else{
                    $multDeTres = "NÃO é multiplo de 3";
                }

                echo "<h3>$multDeTres</h3>";
            }else{
                echo "<h2>ERRO! Não recebi nenhum número!</h2>";
            }
        ?>        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>