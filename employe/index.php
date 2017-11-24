<?php

require __DIR__. '/../include/outils.php';



$employers = new Employers();
$employers = $employers->tous();


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
            'title' => 'Employers',
            'actions' => array(
                array(
                    'nom'   => 'Ajouter',
                    'icon'  => 'fa fa-plus',
                    'lien'  => '/Employe/ajouter.php'
                )
            )
        )); ?> 

    
    
        <div class="content">
            <div class="container-fluid">
               <div class="row">
                   <div class="col-md-12">
                       <div class="card">
                           <div class="header">
                               <h4 class="title">Liste des Employees</h4>
                               <p class="category">Cette page pour tous les employees avec la possiblite de la modifie</p>
                           </div>
                           <div class="content table-responsive table-full-width">
                               <table class="table table-hover table-striped">
                                   <thead>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>TEL</th>
                                    <th>ADRESSE</th>
                                    <th>Em@il</th>
                                    <th>Salaire</th>
                                    <th>Admin</th>
                                    <th>Action</th>
                                   </thead>
                                   <tbody>
                                    <?php 
                                       // dd($employers);
                                    foreach($employers as $e): ?>
                                       <tr>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->id?></a></td>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->nom ?></a></td>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->prenom ?></a></td>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->tel ?></a></td>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->address ?></a></td>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->email ?></a></td>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->salaire ?></a></td>
                                        <td><a href="<?= lien('/employe/info.php?id=' . $e->id) ?>"><?= $e->admin ?></a></td>
                                        <td><a class='btn btn-info btn-xs' href="<?= lien('/employe/modifier.php?id=' . $e->id) ?>"><span class="pe-7s-edit"></span>Modifier</a>
                                         <a href="<?= lien('/employe/supprimer.php?id=' . $e->id) ?>" class="btn btn-danger btn-xs"><span class="pe-7s-delete-user"></span>Supprimer</a></td>
                                       </tr>
                                    <?php endforeach; ?>   
                                   </tbody>
                               </table>

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