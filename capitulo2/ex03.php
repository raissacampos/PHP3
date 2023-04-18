<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Real, euro e dolar</h1>

    <form action="ex03.php"
    method="post">

    <p>Valor em real</p>
    <input type="text" name="real"/>

    <p>Valor em euro</p>
    <input type="text" name="euro"/>

    <p>Valor em dolar</p>
    <input type="text" name="dolar"/>

    <p><input value="calcular"
    type="submit"/></p>

</form>

<?php

    if ((isset($_REQUEST["real"])) and (isset($_REQUEST["euro"])) and (isset($_REQUEST["dolar"]))){

        $real = $_REQUEST["real"];

        $euro = $_REQUEST["euro"];

        $dolar = $_REQUEST["dolar"];

        $euro_cal = number_format(($real / $euro),2);
        $dolar_cal = number_format(($real / $dolar),2);

        echo "<p> R$". $real. " em euro é €". $euro_cal. " e em dolar é U$". $dolar_cal. "</p>";
    }

    ?>
</body>
</html>