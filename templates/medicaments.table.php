<div class="card">
    <div class="header">
        <h4 class="title"><?= $title ?></h4>
        <p class="category"><?= $subtitle ?></p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
                <th>Ref</th>
                <th>Nom</th>
                <th>Type</th>
                <th>Qte</th>
                <th>Position</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php foreach($medicaments as $medicament): ?>
                <tr>
                    <td><a href="<?= lien('/medicaments/info.php?id=' . $medicament->id) ?>"><?= $medicament->ref ?></a></td>
                    <td><a href="<?= lien('/medicaments/info.php?id=' . $medicament->id) ?>"><?= $medicament->nom ?></a></td>
                    <td><?= $medicament->form ?></td>
                    <td><?= $medicament->qte ?></td>
                    <td><?= $medicament->aille . '-' . $medicament->col . '-' . $medicament->etage ?></td>
                    <td>
                        <a class="btn btn-info btn-xs" href="<?= lien('/medicaments/modifier.php?id=' . $medicament->id) ?>">
                            <span class="pe-7s-edit"></span>Modifier
                        </a>
                        <a class="btn btn-danger btn-xs" href="<?= lien('/medicaments/supprimer.php?id=' . $medicament->id) ?>">
                            <span class="pe-7s-trash"></span>Supprimer
                        </a>
                        <?php if(in_array($medicament->id, $_SESSION['medicaments'])): ?>
                            <button class="btn-add-cart btn btn-warning btn-xs" data-id="<?= $medicament->id ?>">
                                <span class="pe-7s-shopbag"></span>Retirer du panier
                            </button>          
                        <?php else: ?>
                            <button class="btn-add-cart btn btn-success btn-xs" data-id="<?= $medicament->id ?>">
                                <span class="pe-7s-shopbag"></span>Ajouter au Panier
                            </button>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>

    </div>
</div>