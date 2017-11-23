<?php

require __DIR__. '/../include/outils.php';

$clients = new Clients();
$clients = $clients->tous();

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
                  <div class="col-md-12">
                      <?php
                          template('clients.table', array(
                              'title'         => 'Les Clients',
                              'subtitle'      => 'Tous les Clients ',
                              'clients' => $clients
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