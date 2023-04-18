<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
        Um vetor de vetor define uma matriz
-->
<?php
$velha = array();
$velha[0][0] = "X";
$velha[0][1] = "O";
$velha[0][2] = "X";
$velha[1][0] = "O";
$velha[1][1] = "O";
$velha[1][2] = "X";
$velha[2][0] = "X";
$velha[2][1] = "X";
$velha[2][2] = "X";

for ($i=0;$i<3;$i++){
    for ($j=0;$j<3;$j++){
        echo $velha[$i][$j]. " ";
    }
    echo "<br />";
}

?>
</body>
</html>