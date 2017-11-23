<?php
require __DIR__. '/../include/outils.php';

if(!isset($_GET['id']))
    header('Location:index.php');

$medicament = new Medicaments();
$medicament = $medicament->trouver('id', $_GET['id']);

if($medicament == false)
    header('Location:index.php');
?>


<?php
    template('header', array(
        'path' => '../'
    ));
?>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="public/img/sidebar-5.jpg">
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
                                <h4 class="title">
                                    <?= $medicament->nom ?>
                                    <a class="btn btn-primary pull-right"  href="<?= lien('/medicaments/modifier.php?id=' . $medicament->id) ?>">
                                        <i class="fa fa-plus"></i>
                                        Modifier
                                    </a>
                                </h4>
                                <hr>
                            </div>
                            <div class="content">
                                <div class="typo-line">
                                    <h4><p class="category">Reference</p><?= $medicament->ref ?></h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Type</p><?= $medicament->form ?></h4>
                                </div>


                                <div class="typo-line">
                                    <h4><p class="category">Prix d'Achat</p><?= $medicament->prix_achat ?> DH</h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Prix de Vente</p><?= $medicament->prix_vente ?> DH</h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Quantité</p><?= $medicament->qte ?></h4>
                                </div>
                                
                                
                                <div class="typo-line">
                                    <h4><p class="category">Position</p><?= $medicament->position() ?></h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Date d'Expiration</p><?= $medicament->expiration ?></h4>
                                </div>

                                <div class="typo-line">
                                    <p class="category">Description</p>
                                    <blockquote>
                                        <p><?= $medicament->description ?></p>
                                    </blockquote>
                                </div>
                                
                            </div>
                            <hr>
                        </div>
                    </div> <!-- .col -->

                </div>
            </div>
        </div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>