<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios para iniciantes em PHP5!</title>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <div>
        <?php
            $nome = isset($_GET["nome"]) ? $_GET["nome"] : "nd";
            $nota1 = isset($_GET["nt1"]) ? $_GET["nt1"] : "nd";
            $nota2 = isset($_GET["nt2"]) ? $_GET["nt2"] : "nd";

            if(($nome == "nd") || ($nota1 == "nd") || ($nota2 == "nd")){
                echo "<h2>Não foram definidos os campos do formulário!</h2>";
            }else{
                echo "<h2>Avaliação do aluno <span class='foco'>$nome</span>
                </h2><br>";
                echo "<p>Nota do primeiro teste: <span class='foco'>$nota1</span></p><br>";
                echo "<p>Nota do segundo teste: <span class='foco'>$nota2</span></p>";

                $media = ($nota1+$nota2)/2;
            }
        ?>            
        <br><br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>     
    </div>
    
</body>
</html>