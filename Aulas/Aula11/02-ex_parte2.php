<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula11 - Estrutura de Repetição While</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>    
            <?php
                $i=1;
                while ($i<=5){
                    $v = "num".$i;//Criação de variavel dinamicamente $v1 $v2 .... $v5
                    $url = "v".$i ; // 
                    $$v = isset($_GET["$url"]) ? $_GET[$url] : 0; // $$v variavel da variavel $v com nome $num1 $num2 .... $num5
                    $i++;
                }

                $c = 1;
                while ($c<=5){
                    $v = "num".$c;
                    echo "Valor $c: ". $$v."<br>";
                    $c++;
                }

                /* 
                  Ou também é possivel 
                    $i=1;
                        while ($i<=5) {
                            $n1 = $_GET["num$i"];
                            echo "Número $i:  $n1</br>";
                            $i++;
                        } 
                */
            ?>
       
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>