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
            $nrTermFib = isset($_GET["nrTerm"]) ? $_GET["nrTerm"] : "";
            
            if($nrTermFib == ""){
                echo "<h2>Não foi definito o número de termos a mostrar!</h2>";
            }else{
                $termo1 = 0;
                $termo2 = 1;
                echo "<h2>Solicitou mostrar <span class='foco'>$nrTermFib</span> da Sequência Fibonacci</h2>";
                
                if($nrTermFib == 1){
                    echo "$termo1";
                }else{
                    echo "$termo1 - $termo2";
                }
               
                echo " - FIM!";
            }
        ?>
        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>