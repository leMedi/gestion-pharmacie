<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h2 class=""><b>Facture</b> #001</h2>
            <h4 class="my-0">Date: 23/11/2017</h4>
        </div>
        <div class="col-sm-6 text-right">
            <h3>Pharmacie GI (Mandar)</h3>
            <p>École Nationale des Sciences Appliquées,Bd Béni Amir, BP 77, Khouribga - Maroc</p>
        </div>
    </div>
    <span style="margin: 20px 0;display: block;"></span>
    <div class="row">
        <div class="col-sm-6">
            <?php
                if($_SESSION['client'] > -1) :
                    $client = new Clients();
                    $client = $client->trouver('id', $_SESSION['client']);
                    if($client !== false) :
            ?>
                        <h3><b>Client:</b> <?= $client->nom . ' ' . $client->prenom ?></h3>
                        <p class="my-0"><?= $client->adresse ?></p>
            <?php
                    endif;
                endif;
                ?>
        </div>
        <div class="col-sm-6 text-right">
            <h3><b>Employee</b><br> Mehdi Elhaij</h3>
            <p class="my-0"></p>
        </div>
    </div>
    <span style="margin: 20px 0;display: block;"></span>
    <div class="row">
        <table class="table">
            <thead>
                <th>#</th>
                <th>ref</th>
                <th>Nom</th>
                <th>qte</th>
                <th>prix</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                    $conteur = 1;
                    $total = 0;
                    foreach($medicaments as $medicament): 
                        $total += $medicament->prix_vente;
                ?>
                <tr data-prix="<?= $medicament->prix_vente ?>">
                    <td><?= $conteur++; ?></td>
                    <td><a href="<?= lien('/medicaments/info.php?id=' . $medicament->id) ?>"><?= $medicament->ref ?></a></td>
                    <td><a href="<?= lien('/medicaments/info.php?id=' . $medicament->id) ?>"><?= $medicament->nom ?></a></td>
                    <td>
                        <input class="input-qte" type="number" value="1" min="0" max="<?= $medicament->qte ?>">
                    </td>
                    <td>
                        <h5><b><?= $medicament->prix_vente ?></b> DH</h5>
                    </td>
                    <td>
                        <form action="<?= lien('/achat/handler.php') ?>" method="post">
                            <input name="id" type="text" value="<?= $medicament->id ?>" hidden>
                            <input name="action" type="text" value="enlever_p2" hidden>
                            <button class="btn-add-cart btn btn-danger btn-xs">
                                <span class="fa fa-trash"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><h4>Total: <b id="total"><?= $total ?></b> DH</h4></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-sm-push-6 col-sm-6 text-right">
            <input id="rest" type="number" value="0">
            <button class="btn btn-success">Facturer</button>
        </div>
    </div>
</div>