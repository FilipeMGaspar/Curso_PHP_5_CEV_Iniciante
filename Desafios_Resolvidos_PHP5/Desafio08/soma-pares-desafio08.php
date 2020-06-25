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
                $numdiv = 0;
                $v = "val".$c;
                $url = $v;
                $$val = $_GET[$url];

                if($$val%2==0){
                    $vetPar[] = $$val; 
                }

                for ($i=1; $i<=$$val ;$i++){
                    if($$val%$i==0){
                        $numdiv++;
                    } 
                    if($numdiv ==2){
                        echo $$val."<br>";
                    }  
                }
                
               
            }
           sort($vetPar);
           print_r($vetPar);

        ?> 
        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>