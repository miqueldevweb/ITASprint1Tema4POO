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

    <div class="formulari">
        <form action="procesa.php" method="post">
            <input type="number" name="amount" required min="0" placeholder="Introdueix la quantitat desitjada">
            <select name="options">
                <option value="ingresa">Ingressa</option>
                <option value="retira">Reintegra</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>

    <div class="banner">
        <h1 class="claim">Si portes la teva nòmina et regalem un paquet de la marca que desitgis!!!</h1>
        <img src="./img/creditBanner.png" alt="nen fumant">
    </div>
</body>
</html>