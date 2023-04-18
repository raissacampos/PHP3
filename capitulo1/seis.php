<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número maior</title>
</head>
<body>
    <h1> Número maior </h1>

    <form action="seis.php"
    method="post">

    <p>1° número</p>
    <input type="text" name="primeiro" required>

    <p>2° número</p>
    <input type="text" name="segundo" required>

    <p>3° número</p>
    <input type="text" name="terceiro" required>

    <p><input value="calcular"
    type="submit"/>
    </p>

    <?php
    
    if((isset($_REQUEST["primeiro"])) and (isset($_REQUEST["segundo"])) and (isset($_REQUEST["terceiro"]))) {

        $primeiro = $_REQUEST["primeiro"];
        $segundo = $_REQUEST["segundo"];
        $terceiro = $_REQUEST["terceiro"];

        if (($primeiro > $segundo and $primeiro > $terceiro)){
            echo "<p>". "O número maior é ". $primeiro. "</p>";

        }else if (($segundo > $primeiro and $segundo > $terceiro)){
        echo "<p>". "O número maior é ". $segundo. "</p>";
        
        }else if (($terceiro > $primeiro and $terceiro > $segundo)){
            echo "<p>". "O número maior é ". $terceiro. "</p>";
        }
}

?>
</body>
</html>