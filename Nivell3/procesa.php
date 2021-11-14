<?php
require_once "main.php";
$amount = $_POST['amount'];
$option = $_POST['options'];
$saldoActual = $client->selection($option,$amount);
$check = $client->withdraw($amount);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./dollar.ico">
    <link rel="stylesheet" href="./style.css">
    <title>Banc dels pelats</title>
</head>
<body>
    <header>
        <div class="text">
            <h1>banc dels pelats</h1>
            <h2>l'unic banc que et permet ingressar tants diners de xocolata com vulguis</h2>
        </div>
        <div class="background">
            <img src="./img/logo.png" alt="senyor sense diners">
        </div>
    </header>
    <!-- Carrega dinamica del resultat -->
    <div class="resultat">
        <?php
        if($check){
            ?>
            <h2>Operació realitzada amb èxit. El teu saldo actual és de <?php echo $saldoActual ?> grams de cacau.</h2>
            <?php }else{
                ?> <h2>Ho sentim però no disposes de bastant cacau.</h2>
            <?php } ?>        
    </div>
    <!-- Fi de carrega dinamica -->

    
    <a class="retorna" href="./index.php">Nova operació</a>
    

    <div class="banner">
        <h1 class="claim">Si portes la teva nòmina et regalem un paquet de la marca que desitgis!!!</h1>
        <img src="./img/creditBanner.png" alt="nen fumant">
    </div>
</body>
</html>