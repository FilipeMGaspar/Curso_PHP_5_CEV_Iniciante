<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio10_A!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <h2>Números Exponenciados!</h2><br>
         <form method="GET" action="quadraticos_desafio10.php">
             <?php
               $base = isset($_GET["base"]) ? $_GET["base"] : "nd";
               $elev = isset($_GET["exp"]) ? $_GET["exp"] : "nd";
               
               
             ?>
            <input type="submit" class="botao" value="Calcular">
         </form>   
    </div>
</body>
</html>