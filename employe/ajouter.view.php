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
        <?php template('nav', array(
            'title' => 'Employees',
            'actions' => array(
                array(
                    'nom'   => 'Ajouter',
                    'icon'  => 'fa fa-plus',
                    'lien'  => '/employe/ajouter.php'
                )
            )
        )); ?>
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ajouter un Employee</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input name="employe[nom]" type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Prenom</label>
                                                <input name="employe[prenom]" type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div> <!-- .row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input name="employe[tel]" type="int" class="form-control"  placeholder="06-XX-XX-XX-XX">
                                            </div>
                                        </div>
                                    </div> <!-- .row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>E-m@il</label>
                                                <input name="employe[email]" type="text" class="form-control"  placeholder="Exemple@mail.info">
                                            </div>
                                        </div>
                                    </div> <!-- .row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Addresse </label>
                                                <input name="employe[address]" type="text" class="form-control" placeholder="Adresse ">
                                            </div>
                                        </div>
                                    </div> <!-- .row -->
                                    <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Salaire</label>
                                                    <div class="input-group">
                                                        <input name="employe[salaire]" type="text" class="form-control" placeholder="XXXX">
                                                        <div class="input-group-addon">DH</div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div> <!-- .row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Password </label>
                                                <input name="employe[password]" type="password" class="form-control" placeholder="password">
                                            </div>
                                        </div>
                                    </div> <!-- .row -->
                                    <div class="row">  
                                        <div class="col-md-9">
                                            <select name="employe[admin]" class="form-control">
                                                <option value="1">Administrateur</option>
                                                <option value="0">N'est pas administrateur</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Ajouter</button>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div> <!-- .row -->
                                    
                                </form>
                            </div> <!-- .content -->
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