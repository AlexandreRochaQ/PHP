<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<form method="POST" action="compte.php?action=retirer">
    <input type="text" name="numero_compte_source" placeholder="Numéro de compte source" required>
    <input type="text" name="numero_compte_dest" placeholder="Numéro de compte destination" required>
    <input type="number" name="montant" placeholder="Montant" required>
    <button type="submit">Virer</button>
</form>
