<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de idade</title>
</head>
<body>
    
<h1>Cálculo de Idade</h1>

<?php

$nome = $_REQUEST["nome"];

$nasc = $_REQUEST["nasc"];

$atual = date("Y");

$idade = $atual - $nasc;

echo $nome. " a sua idade é ". $idade. " anos. ";

?>

<p>

<input type="button" value="Voltar"

onclick="javascript:history.back();">

</p>
</body>
</html>