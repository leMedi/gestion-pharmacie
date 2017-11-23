<?php
require __DIR__. '/../include/outils.php';

if(!isset($_GET['id']))
    header('Location:index.php');

$client = new Clients();
$client = $client->trouver('id', $_GET['id']);

if($client == false)
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
            'title' => 'Clients',
            'actions' => array(
                array(
                    'nom'   => 'Ajouter',
                    'icon'  => 'fa fa-plus',
                    'lien'  => '/client/ajouter.php'
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
                                    <?= $client->nom ?>
                                    <a class="btn btn-primary pull-right"  href="<?= lien('/client/modifier.php?id=' . $client->id) ?>">
                                        <i class="fa fa-plus"></i>
                                        Modifier
                                    </a>
                                </h4>
                                <hr>
                            </div>
                            <div class="content">
                                <div class="typo-line">
                                    <h4><p class="category">Nom</p><?= $client->nom ?></h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Prenom</p><?= $client->prenom ?></h4>
                                </div>


                                <div class="typo-line">
                                    <h4><p class="category">Tel</p><?= $client->tel?></h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Montant restant à payer</p><?= $client->montant_restant?> DH</h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Adresse</p><?= $client->adresse ?></h4>
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