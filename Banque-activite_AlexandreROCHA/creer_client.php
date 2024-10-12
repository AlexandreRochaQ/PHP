<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<form method="POST" action="ajouter_client.php">
    <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
    </div>
    <div class="form-group">
    <label for="prenom">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom"
    required>
    </div>
    <div class="form-group">
    <label for="telephone">Téléphone</label>
    <input type="tel" class="form-control" id="telephone" name="telephone"
    placeholder="Téléphone">
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de
    passe" required>
    </div>
    <button type="submit" class="btn btn-primary">S’inscrire</button>
</form>
