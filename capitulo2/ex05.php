<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PI</title>
</head>
<body>
    <h1>Perímetro</h1>

    <form action="ex05.php"
    method="post">

    <p>Digite o raio da circunferência</p>
    <input type="text" name="raio"/>
    
    <p><input value="calcular"
    type="submit"/></p>

    </form>

    <?php
    if ((isset($_REQUEST["raio"]))) {

    $raio = $_REQUEST["raio"];

    $perimetro = number_format((2 * pi() * $raio), 3);

    echo "O perímetro é ". $perimetro;
}
    ?>
</body>
</html>