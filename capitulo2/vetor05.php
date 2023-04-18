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
    $vetor = array();

    for ($i=1;$i<50;$i++){
        $vetor ["$i"] = rand(1,500);
    }

    for ($i=1;$i<50;$i++){
        echo $vetor ["$i"]. "; ";
    }

    $soma=0;
    for ($i=1;$i<50;$i++){
        $soma=($soma + $vetor["$i"]);
    }

    $media = $soma / 50;
    echo "<br />". $media;
    ?>
</body>
</html>