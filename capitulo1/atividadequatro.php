<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cálculo da área</h1>

    <form action="atividadequatro.php"

    method="post">

    <p>Digite o valor da largura:</p>
    <input type="text" name="largura" required>

    <p>Digite o valor da altura:</p>
    <input type="text" name="altura" required>

    <p><input value="calcular"
    type="submit"/>
    </p>

<?php

    if ((isset($_REQUEST["largura"])) and (isset($_REQUEST["altura"]))) {

        $largura = $_REQUEST["largura"];
        $altura = $_REQUEST["altura"];

        $total = ($largura * $altura);

        echo "<p>". " O valor da área é ". $total.
        "</p>";
    

    if ($largura == $altura) {
        echo "<img src='Imagem/Area/quadrado.jpg'>";
    } else {
        echo "<img src='Imagem/Area/retangulo.jpg'>";
    }}

    ?>
</body>
</html>