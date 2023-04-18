<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Vetores com chaves descitivas

        Isso em php é chamado de vetor com caracteristica associativa
-->

<?php
$produto=array();
$produto["codigo"]=11;
$produto["descricao"]="televisor";
$produto["preco"]=1990;

echo "codigo" . $produto["codigo"] . "<br /> Descrição: " .
$produto["descricao"]. "<br /> Preços: " .
$produto["preco"];
?>
</body>
</html>