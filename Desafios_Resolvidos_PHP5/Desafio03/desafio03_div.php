<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios para iniciantes em PHP5.</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : "não informado ";  

            echo "<h2>O valor $v</h2>";

            if ($v%2 == 0){
                $resp = ", pelo 2";
            }
            if ($v%5 == 0){
                $resp = $resp.", pelo 5";
            }
            if($v%10 == 0){
                $resp = $resp." e pelo 10.";
            }
            if(($v%2 !=0) && ($v%5!=0) && ($v%10!=0)){
                $resp = " não! Não divide pelo 2, nem pelo 5 e nem pelo 10.";
            }
            echo "É divisivel $resp";

        ?>
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    </div>
</body>
</html>