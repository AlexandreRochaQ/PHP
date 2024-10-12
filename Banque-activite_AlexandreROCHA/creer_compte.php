<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<form method="POST" action="ajouter_compte.php">
    <div class="form-group">
    <label for="numeroCompte">Numéro de compte</label>
    <input type="text" class="form-control" id="numeroCompte" name="numeroCompte"
    placeholder="Numéro de compte" required>
    </div>
    <div class="form-group">
    <label for="solde">Solde</label>
    <input type="number" class="form-control" id="solde" name="solde" placeholder="Solde initial"
    min="10" max="2000" required>
    </div>
    <div class="form-group">
    <label for="typeDeCompte">Type de compte</label>
    <select class="form-control" id="typeDeCompte" name="typeDeCompte" required>
    <option value="courant">Courant</option>
    <option value="epargne">Épargne</option>
    <option value="entreprise">Entreprise</option>
    </select>
    </div>
    <input type="number" value=
    "
    …
    " class="form-control" id="clientId" name="clientId" required>
    <button type="submit" class="btn btn-primary">Créer compte</button>
</form>