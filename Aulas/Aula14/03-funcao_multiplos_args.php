<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula14 - Rotinas em PHP - Parte 1</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            function soma(){
                $p = func_get_args();
                $t = func_num_args();
                $s = 0;
                for($i=0; $i<$t; $i++){
                    $s += $p[$i];
                }
                return $s;
            }    

            $res = soma(7,3,8,9);
            echo "A soma dos valores é: $res";
        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>