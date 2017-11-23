<?php
require_once(__DIR__. '/../include/outils.php');

function ancient($cle)
{
    global $medicament;
    if($medicament && array_key_exists($cle, $medicament))
        return $medicament[$cle];
    else
        return '';
}

?>


<?php
    template('header', array(
        'path' => '../'
    ));
?>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="../public/img/sidebar-5.jpg">
        <?php template('sidebar'); ?> 
    </div> <!-- .sidebar -->

    <div class="main-panel">
        <?php template('nav', array(
            'title' => 'Medicaments',
            'actions' => array(
                array(
                    'nom'   => 'Ajouter',
                    'icon'  => 'fa fa-plus',
                    'lien'  => '/medicaments/ajouter.php'
                )
            )
        )); ?>
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Modifier le Medicament</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <input name="medicament[id]" value="<?= $medicament['id'] ?>" type="text" HIDDEN>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input name="medicament[nom]" value="<?= ancient('nom') ?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Reference</label>
                                                <input name="medicament[ref]" value="<?= ancient('ref') ?>" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Form</label>
                                                <select name="medicament[form]" class="form-control">
                                                    <option>Comprimé</option>
                                                    <option>Solutions (sirop, gouttes)</option>
                                                    <option>Injectables</option>
                                                    <option>Inhalées</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Le Prix d'achat</label>
                                                <input name="medicament[prix_achat]" value="<?= ancient('prix_achat') ?>" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Le prix de vente</label>
                                                <input name="medicament[prix_vente]" value="<?= ancient('prix_vente') ?>" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Qte</label>
                                                <input name="medicament[qte]" value="<?= ancient('qte') ?>" type="number" class="form-control" placeholder="100">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Aille</label>
                                                <input name="medicament[aille]" value="<?= ancient('aille') ?>" type="text" class="form-control" placeholder="A">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Colonne</label>
                                                <input name="medicament[col]" value="<?= ancient('col') ?>" type="number" class="form-control" placeholder="3">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Etage</label>
                                                <input name="medicament[etage]" value="<?= ancient('etage') ?>" type="number" class="form-control" placeholder="1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date d'Expiration</label>
                                                <input name="medicament[expiration]" value="<?= ancient('expiration') ?>" type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="medicament[description]" rows="5" class="form-control" placeholder="Here can   "></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>
                                                    <input name="medicament[ordonance]" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                    Medicament Necessitant une Ordonnance
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Enregister</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div> <!-- .card -->
                    </div> <!-- .col -->
                </div>
            </div>
        </div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>