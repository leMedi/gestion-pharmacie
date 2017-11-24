<?php
require_once(__DIR__. '/../include/outils.php');

function ancient($cle)
{
    global $client;
    if($client && array_key_exists($cle, $client))
        return $client[$cle];
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
            'title' => 'clients',
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
                                <h4 class="title">Modifier le Client</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <input name="client[id]" value="<?= $client['id'] ?>" type="text" HIDDEN>


                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>Nom</label>
                                               <input type="text" class="form-control" name="client[nom]" value="<?= ancient('nom')?>" >
                                          </div>
                                      </div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>Prenom</label>
                                               <input type="text" class="form-control" name="client[prenom]" value="<?= ancient('prenom') ?>" >
                                          </div>
                                      </div>
                                  </div>

                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group">
                                               <label>Tel</label>
                                               <input type="text" class="form-control" name="client[tel]" value="<?= ancient('tel') ?>" >
                                           </div>
                                       </div>
                                   </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>Montant Restant à payer</label>
                                              <input type="text" class="form-control" name="client[montant_restant]" value="<?= ancient('montant_restant') ?>" >
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="form-group">
                                              <label>Adresse</label>
                                              <input type="text" class="form-control" name="client[adresse]" value="<?= ancient('adresse') ?>" >
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




































<?php

require_once(__DIR__. '/../include/outils.php');


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
        <?php template('nav'); ?> 
    
        <div class="content">
            <div class="container-fluid">
               <div class="row">
                   <div class="col-md-8">
                       <div class="card">
                           <div class="header">
                               <h4 class="title">Ajouter Client</h4>
                           </div>
                           <div class="content">
                               <form>
                                   
                                  
                                  
                                   <button type="submit" class="btn btn-info btn-fill pull-right">Ajouter le Client</button>
                                   <div class="clearfix"></div>
                               </form>
                           </div>
                       </div>
                   </div>

               </div> 
            </div>
        </div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>




