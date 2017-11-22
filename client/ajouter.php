<?php

require __DIR__. '/../include/outils.php';


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
                                   
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group">
                                               <label>Nom</label>
                                               <input type="text" class="form-control" placeholder="Nom" value="">
                                           </div>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group">
                                               <label>Prenom</label>
                                               <input type="text" class="form-control" placeholder="Prenom" value="">
                                           </div>
                                       </div>
                                   </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tel</label>
                                                <input type="text" class="form-control" placeholder="Tel" value="">
                                            </div>
                                        </div>
                                    </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group">
                                               <label>Montant Restant à payer</label>
                                               <input type="text" class="form-control" placeholder="Montant Restant à payer" value="">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="row">
                                       <div class="col-md-12">
                                           <div class="form-group">
                                               <label>Adresse</label>
                                               <input type="text" class="form-control" placeholder="Adresse" value="">
                                           </div>
                                       </div>
                                   </div>
                                  
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