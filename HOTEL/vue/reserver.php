    
<h2>Informations Chambre</h2>

<div class="card m-2" style="width: 18rem;">
    <img src="public/img/<?= $chambre->getImage(); ?>" alt="">
    
</div>

<h2 class="text-center">Reserver une chambre</h2>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden">
    <div class="form-group">
        <label for="">Nom</label>
        <input type="number" name="prix" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Prenom</label>
        <input type="number" name="nbLits" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Quantité</label>
        <input type="number" name="nbPers" class="form-control">
    </div>

    <input type="submit" class="btn btn-success mt-3">
</form>