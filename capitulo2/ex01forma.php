<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <h1> Cálculo de média</h1>

    <form action="ex01forma.php"
    method="post">

    <p>Digite o nome do aluno</p>
    <input type="text" name="nome"/>

    <p>Digite a primeira nota:</p>
    <input type="text" name="nota1"/>

    <p>Digite a segunda nota:</p>
    <input type="text" name="nota2"/>

    <p><input value="calcular"
    type="submit"/></p>

</form>

<?php
if ((isset($_REQUEST["nome"])) and (isset($_REQUEST["nota1"])) and (isset($_REQUEST["nota2"]))){
$nome = $_REQUEST["nome"];

$nota1 = $_REQUEST["nota1"];

$nota2 = $_REQUEST["nota2"];

$media = number_format((($nota1 + $nota2) / 2),1);

$mediaformatada = str_replace(".",",",$media);

echo $nome. " a sua média final é ". $mediaformatada;
}
?>

<p><input type="button" value="voltar"

onclick="javascript:history.back()">

</p>

</body>
</html>