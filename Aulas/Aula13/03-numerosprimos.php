<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula13 - Estrutura de Repetição For</title>
    <link rel="stylesheet" href="_css/estilo.css">

</head>
<body>
    <div>
        <?php 
             $nr = isset($_GET["num"]) ? $_GET["num"] : 1;

             $nrdiv = 0;
             echo "O Número <span class='foco'>$nr</span> tem como:<br><br>";
 
             echo "..: Multiplos: ";
             for($i=1; $i<=$nr; $i++){
                 if (($nr % $i)==0){
                    echo $i." ";
                    $nrdiv ++;
                 } 
             }

             if($nrdiv==2){
                $result = "É Primo!";
             }else{
                $result = "NÃO É PRIMO!";
             }

            echo "<br>";   
            echo "<br>..: Número de multiplos: $nrdiv";
            echo "<br>";
            echo "<br>..: Resultado: O número $nr <span class='foco'>$result</span>";
        ?>
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>