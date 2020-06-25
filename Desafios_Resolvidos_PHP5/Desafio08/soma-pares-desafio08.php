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
                    $vet[] = $$val; 
                }
           }
           sort($vet);
           print_r($vet);
        ?> 
        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>