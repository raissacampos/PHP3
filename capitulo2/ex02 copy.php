<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Valores</h1>

    <form action="ex02 copy.php"
    method="post">

    <p>Nome do produto</p>
    <input type="text" name="nome"/>

    <p>Digite a quantidade</p>
    <input type="text" name="quant"/>

    <p>Digite o preço unitário</p>
    <input type="text" name="pre"/>

    <p>Digite o valor do frete</p>
    <input type="text" name="frete"/>

    <p>Digite o valor do desconto</p>
    <input type="text" name="desc"/>

    <p><input value="calcular"
    type="submit"/></p>

</form>

<?php

if ((isset($_REQUEST["nome"])) and (isset($_REQUEST["quant"])) and (isset($_REQUEST["pre"])) and (isset($_REQUEST["frete"])) and (isset($_REQUEST["desc"]))){

    $nome = $_REQUEST["nome"];

    $quant = $_REQUEST["quant"];

    $pre = $_REQUEST["pre"];

    $frete = $_REQUEST["frete"];

    $desc = $_REQUEST["desc"];

    $pretotal = number_format(((($quant * $pre) - $desc) + $frete ),2);

    $pretotalformatada = str_replace(".",",",$pretotal);

    echo  "O preço total é de R$ ". $pretotalformatada;
}

?>

<p><input type="button" value="voltar"

onclick="javascript:history.back()">

</p>
</body>
</html>