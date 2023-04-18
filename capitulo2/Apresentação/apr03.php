<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números aleatórios</h1>
<?php

$number = array();
    
for ($i=0;$i<2;$i++){
    $number ["$i"]= rand(1,1000);
    
  }   
    for ($i=0;$i<2;$i++){
    echo $number ["$i"]. "<br/>" ;
   
    }

   ?>
</body>
</html>