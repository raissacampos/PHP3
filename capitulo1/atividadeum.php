<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de médias</title>
</head>
<body>
    
<h1>Cálculo de Médias</h1>

<form action="atividadeum.php"

method="post">



<p>Digite a primeira nota:</p>
<input type="text" name="um" required/>

<p>Digite a segunda nota:</p>
<input type="text" name="dois" required/>

<p>Digite a terceira nota:</p>
<input type="text" name="tres" required/>

<p>Digite a quarta nota:</p>
<input type="text" name="quatro" required/>

<p><input value="Calcular"

type="submit"/>

</p>

</form>

<?php

if((isset($_REQUEST["um"])) and 
(isset($_REQUEST["dois"])) and (isset($_REQUEST["tres"])) and (isset($_REQUEST["quatro"]))) {
    $um = $_REQUEST["um"];
    $dois = $_REQUEST["dois"];
    $tres = $_REQUEST["tres"];
    $quatro = $_REQUEST["quatro"];

    $media = ($um + $dois + $tres + $quatro) /4;

    echo "<p>".

    " a sua média é ". $media.

"</p>";
}

?>

</body>
</html>