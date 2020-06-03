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
    <?php
        $ds=isset($_GET["ds"])?$_GET["ds"]:0;
        if ($ds==1) {
            $dia = "No Domingo";
        }
        if ($ds==2) {
            $dia = "Na Segunda";
        }
        if ($ds==3) {
            $dia = "Na Terça";
        }
        if ($ds==4) {
            $dia = "Na Quarta";
        }
        if ($ds==5) {
            $dia = "Na Quinta";
        }
        if ($ds==6) {
            $dia = "Na Sexta";
        }
        if ($ds==7) {
            $dia = "No Sabado";
        }
    switch($ds){
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            $est="Vamos estudar! :)";
            break;
        case 1:
        case 7:
            $est="Vamos descansar! ;)";
            break;
        default:
            echo "Dia inválido";
    }
    echo"$dia $est";
    ?>
    <!-- Fim código PHP -->
    </br></br>
    <form action="aula10.1.html">
        <input type="submit" value="Voltar" class="botao"/>
    </form>
</div>
</body>
</html>