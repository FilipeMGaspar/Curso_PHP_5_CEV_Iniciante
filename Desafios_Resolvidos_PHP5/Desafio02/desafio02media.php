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
            echo "Soma e média dos seguintes valores, ";
            for ($i=1; $i<=3; $i++){
                $v = "num".$i; // $v = num1; num2 e num3
                $urlv = $v;// $urlv = num1; num2 e num3
          
                $$var = isset($_GET[$urlv]) ? $_GET[$urlv] : 0 ;//para o caso do valor não ser definido vai ser 0 o através de variaveis de variaveis a variavel $$var vai receber o valor nas caixas de texto num1, num2 e num3
                echo  " ".$$var." ; ";
                $soma += $$var; 
            }
            
            $media = $soma/3;
            $media = round($media, 2);
            echo "<br><br>Soma = $soma";
            echo "<br><br>Média = <span class='foco'>$media</span>";
        ?>  
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>  
    </div>
</body>
</html>