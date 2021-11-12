<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Banc dels pelats</title>
</head>
<body>
    <header>
        <div class="text">
            <h1>banc dels pelats</h1>
            <h2>l'unic banc que et permet ingressar tants diners de xocolata com vulguis</h2>
        </div>
    </header>

    <div class="formulari">
        <form action="procesa.php" method="post">
            <input type="text" name="amount" placeholder="Introdueix la quantitat desitjada">
            <select name="options">
                <option value="ingresa">Ingressa</option>
                <option value="retira">Reintegra</option>
            </select>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>