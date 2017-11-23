<div class="card">
    <div class="header">
        <h4 class="title"><?= $title ?></h4>
        <p class="category"><?= $subtitle ?></p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <thead>
             <th>ID</th>
             <th>Nom</th>
             <th>Prenom</th>
             <th>TEL</th>
             <th>MONTANT RESTANT À PAYER</th>
             <th>ADRESSE</th>
             <th>Action</th>
            </thead>
            <tbody>
              <?php foreach($clients as $client): ?>
                <tr>
                  <td><a href="<?= lien('/client/info.php?id=' . $client->id) ?>"><?= $client->id ?></a></td>
                  <td><a href="<?= lien('/client/info.php?id=' . $client->id) ?>"><?= $client->nom ?></a></td>
                  <td><a href="<?= lien('/client/info.php?id=' . $client->id) ?>"><?= $client->prenom ?></a></td>
                  <td><?= $client->tel ?></td>
                  <td><?= $client->montant_restant ?></td>
                  <td><?= $client->adresse ?></td>
                  <td>
                        <a class="btn btn-info btn-xs" href="<?= lien('/client/modifier.php?id=' . $client->id) ?>">
                            <span class="pe-7s-edit"></span>Modifier
                        </a>
                        <a class="btn btn-danger btn-xs" href="<?= lien('/client/supprimer.php?id=' . $client->id) ?>">
                            <span class="pe-7s-delete-user"></span>Supprimer
                        </a>
                        <form action="<?= lien('/achat/handler.php') ?>" method="POST" style="display:inline-block;">
                            <input name="id" type="text" value="<?= $client->id ?>" hidden>
                            <?php if($client->id === $_SESSION['client'] ): ?>
                                <input name="action" type="text" value="clientfa" hidden>
                                <button class="btn-add-cart btn btn-warning btn-xs">
                                    <span class="pe-7s-shopbag"></span>Anuller La Facture
                                </button>          
                            <?php else: ?>
                                <input name="action" type="text" value="clientf" hidden>
                                <button class="btn-add-cart btn btn-success btn-xs">
                                    <span class="pe-7s-shopbag"></span>Facture pour Client
                                </button>
                            <?php endif; ?>
                        </form>
                  </td>
                </tr>
              <?php
                    endforeach;
              ?>
            </tbody>
        </table>

    </div>
</div>