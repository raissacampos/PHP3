<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h1>Categorias</h1>

    <form action="atividadeoito.php"
    method="post">

    <p>Classe:</p>
    <input type="text" name="classe" required>

    <p>Salarial:</p>
    <input type="text" name="salarial" required>

    <p><input value="calcular"
    type="submit"/>
</p>

<?php

if ((isset($_REQUEST["classe"])) and (isset($_REQUEST["salarial"]))) {

    $classe = $_REQUEST["classe"];
    $salarial = $_REQUEST["salarial"];

    if(($classe == "a") or ($classe == "A") or ($classe == "c") or ($classe == "C")){

        $reajuste = $salarial * 1.10;
        echo "<p>". " O seu salário será ". $reajuste. "</p>";
    

    }else if(($classe == "b") or ($classe == "B") or ($classe == "d") or ($classe == "D") or ($classe == "e") or ($classe == "E")){

        $reajuste = $salarial * 1.15;
        echo "<p>". " O seu salário será ". $reajuste. "</p>";

    }else if(($classe == "f") or ($classe == "F") or ($classe == "l") or ($classe == "L")){

        $reajuste = $salarial * 1.25;
        echo "<p>". " O seu salário será ". $reajuste. "</p>";

    }else if(($classe == "g") or ($classe == "G") or ($classe == "h") or ($classe == "H")){

        $reajuste = $salarial * 1.35;
        echo "<p>". " O seu salário será ". $reajuste. "</p>";
    
    }else if(($classe == "i") or ($classe == "I") or ($classe == "j") or ($classe == "J")){

        $reajuste = $salarial * 1.50;
        echo "<p>". " O seu salário será ". $reajuste. "</p>";
}
}
?>
</body>
</html>