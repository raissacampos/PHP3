<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo de Dados</title>
</head>
<body>

<h1> Jogo de dados</h1>
<form action="atividadetres.php">
    <p>Digite quantas vezes o dado será lançado:
        <input type="text" name="quant" required/>
</p>
<p><input value="Jogar"type="submit"/></p>
 </form>


    <?php
    if (isset($_REQUEST["quant"])) {
        $quant = $_REQUEST["quant"];

        for($i = 1 ; $i <= $quant ; $i++) {

            $lado = rand (1, 6);
            echo "<img src='Imagem/dado/dado". $lado. ".png'>";
        }
    }

    ?>
</body>
</html>