<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio02 - Média Aritemética!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            for ($i=1; $i<=3; $i++){
                $v = "num".$i; // $v = num1; num2 e num3
                $urlv = $v;// $urlv = num1; num2 e num3
                //$$var = isset($_GET["$urlv"]) ? ($_GET["$urlv"] : 0;  // $$v variavel da variavel $v com nome $num1; $num2 e $num3 
                $$var = $_GET[$urlv];
                
                var_dump($$var);
                echo "AKI <br>";
            }
        ?>  
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>  
    </div>
</body>
</html>