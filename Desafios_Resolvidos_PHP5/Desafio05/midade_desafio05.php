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
                
                echo "aki!";
                if($i != "nd"){
                    echo "Tem anos de idade.";
                }else{
                    echo "<script> alert('Erro!!!!!')</script>";
                }
           ?> 
           <br><br>
          <a href="javascript:history.go(-1)" class="botao">Voltar</a> 
    </div>
    
</body>
</html>