<div class="row">
    <span class="h3">Liste des contacts</span>
    <a href="/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php?view=add" class="btn btn-primary offset-7">Nouveau</a>
</div>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Prénom</td>
                <td>Nom</td>
                <td>Téléphone</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contacts as $c) {?>
                <tr>
                    <td><?= $c["id"]?></td>
                    <td><?= $c["prenom"]?></td>
                    <td><?= $c["nom"]?></td>
                    <td><?= $c["telephone"]?></td>
                    <td>
                        <a href="/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php?view=update&id=<?= $c['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="/COURS/PHP_L2/POO/CRUD_MVC_POO/index.php?action=supprimer&id=<?= $c['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>