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
                   <div class="col-md-12">
                       <div class="card">
                           <div class="header">
                               <h4 class="title">Striped Table with Hover</h4>
                               <p class="category">Here is a subtitle for this table</p>
                           </div>
                           <div class="content table-responsive table-full-width">
                               <table class="table table-hover table-striped">
                                   <thead>
                                       <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>TEL</th>
                                    <th>MONTANT RESTANT À PAYER</th>
                                    <th>ADRESSE</th>
                                    <th>Action</th>
                                   </thead>
                                   <tbody>
                                       <tr>
                                        <td>1</td>
                                        <td>Dakota Rice</td>
                                        <td>$36,738</td>
                                        <td>Niger</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                        <td><a class='btn btn-info btn-xs' href="#"><span class="pe-7s-edit"></span>Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="pe-7s-delete-user"></span>Supprimer</a></td>
                                       </tr>
                                       <tr>
                                        <td>2</td>
                                        <td>Minerva Hooper</td>
                                        <td>$23,789</td>
                                        <td>Curaçao</td>
                                        <td>Sinaai-Waas</td>
                                       </tr>
                                       <tr>
                                        <td>3</td>
                                        <td>Sage Rodriguez</td>
                                        <td>$56,142</td>
                                        <td>Netherlands</td>
                                        <td>Baileux</td>
                                       </tr>
                                       <tr>
                                        <td>4</td>
                                        <td>Philip Chaney</td>
                                        <td>$38,735</td>
                                        <td>Korea, South</td>
                                        <td>Overland Park</td>
                                       </tr>
                                       <tr>
                                        <td>5</td>
                                        <td>Doris Greene</td>
                                        <td>$63,542</td>
                                        <td>Malawi</td>
                                        <td>Feldkirchen in Kärnten</td>
                                       </tr>
                                       <tr>
                                        <td>6</td>
                                        <td>Mason Porter</td>
                                        <td>$78,615</td>
                                        <td>Chile</td>
                                        <td>Gloucester</td>
                                       </tr>
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