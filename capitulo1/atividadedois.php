<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>
<body>
    <h1>Desconto</h1>

    <form action="atividadedois.php"

    method="post">

    <p>Digite seu nome:</p>
    <input type="text" name="nome" required/>

    <p>Informe a quantidade:</p>
    <input type="text" name="quant" required/>

    <p>Informe o preço unitário:</p>
    <input type="text" name="pre" required/>

    <p>Informe o desconto:</p>
    <input type="text" name="desc" required/>

    <p><input value="Calcular"

type="submit"/>

</p>

<?php

if((isset($_REQUEST["quant"])) and (isset($_REQUEST["pre"] ))and (isset($_REQUEST["desc"]))) {

    $nome = $_REQUEST["nome"];
    $quant = $_REQUEST["quant"];
    $pre = $_REQUEST["pre"];
    $desc = $_REQUEST["desc"];

    $total = ($quant * $pre) - $desc;

    echo "<p>". "Você comprou ". $quant. " ". $nome.

    " com  ". $desc. " de desconto ". ", o preço total é ". $total.

    "</p>";
}

?>
</body>
</html>