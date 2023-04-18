<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
     $numeros = array();

     for ($i=1;$i<200;$i++){
        $numeros ["$i"] = rand(1,1000);

        if (($numeros[$i] % 2 == 0) and ($numeros[$i] % 3 == 0)){
        echo $numeros[$i]. " Número múltiplo de 2 e 3 ". "<br>"; 
        } else {
            echo $numeros[$i]. "<br>";
        }
     }
     ?>
</body>
</html>