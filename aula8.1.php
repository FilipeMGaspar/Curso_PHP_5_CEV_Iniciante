<!DOCTYPE html>
<html>
<head lang="pt">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css\estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
        $nome=isset ($_GET["nome"]) ? $_GET["nome"]:"[Nao Informado]";//isset configura o
        $ano=isset ($_GET["ano"]) ? $_GET["ano"]:0;
        $sexo=isset ($_GET["sexo"]) ? $_GET["sexo"]:"[Sem Sexo]";
        $idade = date(Y)-$ano;
        //$sexo= ($sexom==on) ? "Masculino":"Feminino";
        echo "O seu nome é $nome é do sexo $sexo, nasceu em $ano e tem $idade anos";
    ?>
    </br></br>
    <a href="aula8.1.html"><h2>Voltar</h2></a>
</div>
</body>
</html>