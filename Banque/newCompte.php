<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <header class="bg-secondary p-4 text-center mb-4">
        <h1>Compte bancaire</h1>
        <nav>
            <a href="index.php" class="btn btn-success">Accueil</a>
            <a href="index.php?action=new" class="btn btn-success">New Compte</a>
            <a href="index.php?action=deposer" class="btn btn-success">Déposer</a>
            <a href="index.php?action=retirer" class="btn btn-success">Retirer</a>
            <a href="index.php?action=virer" class="btn btn-success">Virer</a>
        </nav>
    </header>
    <main class="container-fluid">
        <form action="" id="form" method="POST">

            <input type="hidden" value="<?= isset($compte) ? $compte->getId() : '' ?>" name="id">

            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" id="prenom" name="titulaire" class="form-control" 
                value="<?= isset($compte) ? $compte->getTitulaire() : '' ?>" required minlength="2">
            </div>
            
            <div class="form-group">
                <label for="">Montant</label>
                <input type="number" 
                value="<?= isset($compte) ? $compte->getSolde(): '' ?>" id="age" name="solde" class="form-control" required>
            </div>

            <input type="submit" class="btn btn-success mt-3 d-block">
        </form>
    </main>
    
</body>
</html>