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
                                        <td><?= $e->id?></td>
                                        <td><?= $e->nom ?></td>
                                        <td><?= $e->prenom ?></td>
                                        <td><?= $e->tel ?></td>
                                        <td><?= $e->address ?></td>
                                        <td><?= $e->email ?></td>
                                        <td><?= $e->salaire ?></td>
                                        <td><?= $e->admin ?></td>
                                        <td><a class='btn btn-info btn-xs' href="<?= lien('/employe/modifier.php?id=' . $e->id) ?>"><span class="pe-7s-edit"></span>Modifier</a>
                                         <a href="#" class="btn btn-danger btn-xs"><span class="pe-7s-delete-user"></span>Supprimer</a></td>
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