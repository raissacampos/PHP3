<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extra</title>
</head>
<body>
    <?php

    $frase = "você comeria frutas, vegetais, e fibra todos os dias.";
    $saudavel = array("frutas", "vegetais", "fibra");
    $saboroso = array("pizza", "cerveja", "sorvete");

    $novafrase = str_replace($saudavel, $saboroso, $frase);

    echo $novafrase;
    ?>
</body>
</html>