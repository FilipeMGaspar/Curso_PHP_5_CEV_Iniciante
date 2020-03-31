<!DOCTYPE html>
<html>
<head lang="pt">
    <?php
        $dist=isset($_GET["dist"])?$_GET["dist"]:0;
        if($dist==1){
            $d="Aveiro";
        }
        if($dist==2){
            $d="Beja";
        }
        if($dist==3){
            $d="Braga";
        }
        if($dist==4){
            $d="Bragança";
        }
        if($dist==5){
            $d="Castelo Branco";
        }
        if($dist==6){
            $d="Coimbra";
        }
        if($dist==7){
            $d="Évora";
        }
        if($dist==8){
            $d="Faro";
        }
        if($dist==9){
            $d="Guarda";
        }
        if($dist==10){
            $d="Leiria";
        }
        if($dist==11){
            $d="Lisboa";
        }
        if($dist==12){
            $d="Portalegre";
        }
         if($dist==13){
             $d="Porto";
        }
        if($dist==14){
            $d="Santarém";
        }
        if($dist==15){
            $d="Setúbal";
        }
        if($dist==16){
            $d="Viana do Castelo";
        }
        if($dist==17){
            $d="Vila Real";
        }
        if($dist==18){
            $d="Viseu";
        }
         if ($dist==19){
            $d="Ponta Delgada";
        }
        if ($dist==20){
            $d="Funchal";
        }
    ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <!-- inicio código PHP -->
    <?php
        switch($dist){
            case 3:
            case 4:
            case 13:
            case 16:
            case 17:
                $reg="á Região Norte";
                break;
            case 1:
            case 5:
            case 6:
            case 9:
            case 10:
            case 18:
                $reg= "á Regiao Centro";
                break;
            case 11:
            case 14:
            case 15:
                $reg="á Regiao de Lisboa";
                break;
            case 2:
            case 7:
            case 12:
                $reg="á Regiao do Alentejo";
                break;
            case 8:
               $reg="á Regiao do Algrave";
                break;
            case 19:
               $reg= "aos Açores";
                break;
            case 20:
                $reg="á Madeira";
        }
        echo "O distrito de $d pertence $reg";
    ?>
    <!-- Fim código PHP -->
    </br></br>
    <form action="aula10.2.html">
        <input type="submit" value="Voltar" class="botao"/>
    </form>
</div>
</body>
</html>