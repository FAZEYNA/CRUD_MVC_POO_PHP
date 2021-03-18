<div class="card">
    <div class="card-header">
        <span class="h3">Modification de Contact</span>
        <a href="/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php" class="btn btn-warning offset-6">Liste des Contacts</a>
    </div>
    <div class="card-body">
        <form action="/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php?action=modifier" method="POST">
            <input type="text" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="<?= $contact['prenom'] ?>">
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?= $contact['nom'] ?>">
            </div>
            <div class="form-group">
                <label for="">Téléphone</label>
                <input type="text" class="form-control" name="telephone" value="<?= $contact['telephone'] ?>">
            </div>
            <div class="row">
                <input type="submit" name="modifier" class="btn btn-primary" value="enregistrer">
            </div>
        </form>
    </div>
</div>