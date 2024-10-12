<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<form method="POST" action="connexion.php">
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email"
    required>
    </div>
    <div class="form-group">
    <label for="mdp">Mot de passe</label>
    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de
    passe" required>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>