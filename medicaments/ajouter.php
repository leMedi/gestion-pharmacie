<?php
require __DIR__. '/../include/outils.php';

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
        <?php template('nav'); ?> 
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ajouter un Medicament</h4>
                            </div>
                            <div class="content">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nom</label>
                                                <input name="medicament[nom]" type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Reference</label>
                                                <input name="medicament[ref]" type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Form</label>
                                                <select name="medicament[form]" class="form-control">
                                                    <option>Comprimé</option>
                                                    <option>Solutions (sirop, gouttes)</option>
                                                    <option>Injectables</option>
                                                    <option>Inhalées</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Le Prix d'achat</label>
                                                <input name="medicament[pachat]" type="number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Le prix de vente</label>
                                                <input name="medicament[pvente]" type="number" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Qte</label>
                                                <input name="medicament[qte]" type="number" class="form-control" placeholder="100">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Aille</label>
                                                <input name="medicament[allie]" type="number" class="form-control" placeholder="A">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Colonne</label>
                                                <input name="medicament[col]" type="number" class="form-control" placeholder="3">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Etage</label>
                                                <input name="medicament[etage]" type="number" class="form-control" placeholder="1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Date d'Expiration</label>
                                                <input name="medicament[exp]" type="date" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <textarea name="medicament[des]" rows="5" class="form-control" placeholder="Here can   "></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>
                                                    <input name="medicament[ordonance]" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                    Medicament Necessitant une Ordonnance
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Ajouter</button>
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