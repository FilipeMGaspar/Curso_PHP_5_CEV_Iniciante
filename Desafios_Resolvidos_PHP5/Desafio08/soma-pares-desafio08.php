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
           
            for ($c=1; $c<=10; $c++){
                
                $v = "val".$c;
                $url = $v;
                $$val = $_GET[$url];

                if($$val%2==0){
                    $vetPar[] = $$val; 
                }
                $numdiv = 0;
                for ($i=1; $i<=$$val ;$i++){                    
                    if($$val%$i==0){
                        $numdiv++;
                    }  
                }
                if($numdiv == 2){
                    $vetPrimos[] = $$val;
                } 
            }
           //linhas para testes
            sort($vetPar);
            print_r($vetPar);
            echo "<br><br>";
            sort($vetPrimos);
            print_r($vetPrimos);
            
            echo "<br><h2>Números pares:</h2>";
            foreach ($vetPar as $par){
                echo "$par;<br>";
            }

            echo "<br><h2></h2>"
        ?> 
        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>