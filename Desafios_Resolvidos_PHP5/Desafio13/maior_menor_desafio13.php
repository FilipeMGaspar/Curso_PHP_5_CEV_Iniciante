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

            while($c<=5){
                $val = "val".$c;
                $url = $val;
                $$v = isset($_GET["val$c"]) ? $_GET["val$c"] : "";
                $vet[] = $$v;
                var_dump ($vet);
                echo "<br>";
                $c++;
            }
        ?>        
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>