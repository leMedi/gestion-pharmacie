<?php
require_once( __DIR__. '/../include/outils.php');



$medicaments = new Medicaments();

$medicaments = $medicaments->qteCritique();
// include "index.view.php";

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
                    <div class="col-md-12">
                        <?php
                            template('medicaments.table', array(
                                'title'         => 'Les Medicaments de <b>Quantite inferieur a 10</b>',
                                'subtitle'      => '',
                                'medicaments'   => $medicaments
                            ));
                        ?>
                    </div> <!-- .col -->
                </div> <!-- .row -->
            </div>
        </div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>