<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio08!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $nrDcx = isset($_GET["qtNraIns"]) ? $_GET["qtNraIns"] : "nd";

            if(($nrDcx == "nd") || ($nrDcx=="")){
                echo "Falta definir a quantidade de números a inserir!";
                echo "<br><br>";
                echo "<a href='javascript:history.go(-1)' class='botao'>Voltar</a>";
            }else{
                echo "<h2>Deseja verificar <span class='foco'>$nrDcx</span> números.</h2><br>";                
            }
        ?>      
        <form method="GET" action="">
            <?php
                for ($i=1; $i<=$nrDcx; $i++){
                    echo "Número $i: <input type='number' name='val$i' min='0' class='insnum' required><br>";
                }

                for ($c=1; $c<=$i; $c++){
                    $v = "val".$i; // $v = val1; val2 ...... val10
                    $urlv = $v;// $urlv =  val1; val2 ...... val10
                    $$vet[] = $_GET[$url];
                    //$$var = isset($_GET[$urlv]) ? $_GET[$urlv] : 0 ;
                }
                echo"<br><br>";
                print_r($$vet);
                
            ?>
            <br>
            <input type="submit" class="botao" value="Verificar"> 
        </form>
           
    </div>
    
</body>
</html>