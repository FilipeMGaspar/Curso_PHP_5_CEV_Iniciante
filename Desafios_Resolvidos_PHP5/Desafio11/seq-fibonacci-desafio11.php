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
                $somaNTermos = 0;
                $termo1 = 0;
                $termo2 = 1;
                echo "<h2><span class='foco'>$nrTermFib</span> termos da Sequência Fibonacci</h2>";
                echo "<br> Sequência Fibonacci: <br><br>";

                if($nrTermFib == 1){
                    echo $termo1 +1 ;
                    $somaNTermos = 1;
                }else{
                    echo "$termo1 - $termo2";
                    $somaNTermos = $termo1 + $termo2;
                    for($i=2; $i<=$nrTermFib; $i++){
                        $termo3 = $termo1 + $termo2;
                        echo " - $termo3 ";
                        $termo1 = $termo2;
                        $termo2 = $termo3;
                        $somaNTermos += $termo3; 
                    }
                    
                }
               
                echo " - FIM!";
                echo "<br><br>";
                echo "A soma dos <span class='foco'>$nrTermFib</span> primeiros termos da Sequência Fibonacci é: <span class='foco'>$somaNTermos</span><br><br>";
            }
        ?>
        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>