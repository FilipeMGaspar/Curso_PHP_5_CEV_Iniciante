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
                $i = isset($_GET["idade"]) ? $_GET["idade"] : "nd";
                
                if(($i != "nd") && $i!=""){
                    echo "Tem $i anos de idade.";
                    if($i <18){
                        echo "<br> <h2>É Menor de Idade!</h2>";
                    }else{
                        
                    }
                }else{
                    echo "<script> alert('Erro!! A Idade não foi definida.')</script>";
                }
           ?> 
           <br><br>
          <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    </div>
    
</body>
</html>