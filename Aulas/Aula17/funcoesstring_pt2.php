<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Aula17 - Funções String em PHP - Parte 2</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php
            // funcao_strtolower
            $nome="Maria Ines";
            $nome2 = strtolower($nome);
            echo "O Seu nome em minusculas $nome2<br/>";
  
            // funcao strtoupper
            $nome3=strtoupper($nome);
            echo "O seu nome em maiscula $nome3<br/>";

            // funcao ucfist
            $nome4=ucfirst($nome);
            echo "o seu nome com a primeira letra maiscula $nome4<br/>";
                
            // funcao ucwords
            $nome5=ucwords($nome);
            echo "O seu nome com as iniciais em Maiuscula $nome5<br/>";

            // funcao strrev
            $nome6=strrev($nome);
            echo "o seu nome invertido $nome6<br/>";  

            //funcao strpos
            $frase="Estou a aprender PHP";
            $pos=strpos($frase,"PHP");
            echo "$frase <br/>na posição $pos<br/>";

            //funcao stripos
            $p=stripos($frase,"php");
            echo "$frase <br/>na posição $p<br/>";

            //funcao substr_count
            $f="Estou a aprender PHP no curso em video de PHP";
            $cont=substr_count($f,"PHP");
            echo "A palavra PHP surge $cont veses na frase <br/><span class='foco'>$f</span><br/>";

            //funcao substr
            $site="Curso Em video";
            $sub=substr($site,0,5); //inicia no inicio da string
            //$sub=substr($site,6);// Inica do fim da string e completa até ao fim
            echo "$sub<br/>";

            //funcao str_pad
            $nn="Guanabara";
            $novo=str_pad($nome,30," ",str_pad_right);//str_pad_center  //str_pad_left
            echo "Meu professor $novo é genial<br/>";

            //funcao str_repeat
            $txt=str_repeat("Php ",5);
            echo "$txt<br/>";

            //funcao str_replace
            $fr="Gosto de estudar Matemática! Matemática é muito porreiro.";
            $novafr=str_replace("Matemática","PHP",$fr);//str_ireplace no caso de ter sido escrito com letra minuscula
            echo"$novafr";

        ?>
        <!--
        <br>
        <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
        -->
    </div>
</body>
</html>