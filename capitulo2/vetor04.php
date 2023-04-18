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

    $valor = array();
    
    for ($i=1;$i<200;$i++){
        $valor ["$i"]= rand(1,1000);
        
      }   
        for ($i=1;$i<200;$i++){
        echo $valor ["$i"]. "; ";
       
        }
       echo "<br />". max($valor);
?>
</body>
</html>