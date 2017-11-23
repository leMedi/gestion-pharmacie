<?php
require __DIR__. '/../include/outils.php';

if(!isset($_GET['id']))
    header('Location:index.php');


if(isset($_POST['confirmer']) && isset($_POST['id']))
{
	$client = new Clients();
	$client = $client->trouver('id', $_POST['id']);
	if($client != false)
	{
    	$client->supprimer();
    	header('Location:index.php');
    }

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
                <div class="col-lg-push-3 col-lg-6">
                    <div class="card"  style="text-align: center;">
                        <div class="header">
                            <h4 class="title">Comfirmer la Suppression</h4>
                            <h5>Voulez-vous vraiment supprimer ce client?</h5>
                        </div>
                        <div class="content">
                            <form class="form-inline" method="POST" >
                            	<input type="text" name="id" value="<?= $_GET['id'] ?>" hidden>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success" value="1" name="confirmer">comfirmer</button>
                                    <a href="<?= lien('/client/') ?>" type="submit" class="btn btn-danger">Annuler</a>
                                </div> <!-- .form-group -->
                                
                            </form>
                                        
                        </div>
                    </div>
                </div> <!-- .col -->
            </div> <!-- .row -->
        </div>
    </div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>