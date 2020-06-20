<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <!-- inicio código PHP -->
    <pre>
    <?php
        // array de indice personalizado
        $v=array(   3=>5,
                    2=>9,
                    1=>10,
                    0=>25);
                    $v[]="E";
        unset($v[4]); //unset apaga um lugar no vetor
        print_r($v);

        //Cahves associativas
        $cad=array(
            "nome"=>"Ana",  //"nome" -> Indice do vetor
            "idade"=>23,
            "peso"=>65
        );

        foreach($cad as $k => $c){//$cad nome do vetor
                                  //$k nome do indice
                                  //$c conteudo no indicie
            echo "O campo <span class='foco'>$k</span> possui o conteudo $c<br/>";
        }
    ?>

    </pre>
    <!-- Fim código PHP -->
    <br/><br/>
    <!-- <a href="javascript:history.go(-1)" class="botao">voltar</a> -->
 <!-- <form action="aula12.2.php">
        <input type="submit" value="Voltar" class="botao"/>
    </form> -->
</div>
</body>
</html>