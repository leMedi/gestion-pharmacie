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
                                <h4 class="title">Dwa Lkohba</h4>
                                <hr>
                            </div>
                            <div class="content">
                                <div class="typo-line">
                                    <h4><p class="category">Reference</p>EGH2156</h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Type</p>Sirope </h4>
                                </div>


                                <div class="typo-line">
                                    <h4><p class="category">Prix d'Achat</p>30 DH </h4>
                                </div>
                                <div class="typo-line">
                                    <h4><p class="category">Prix de Vente</p>50 DH </h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Quantité</p>501 </h4>
                                </div>
                                
                                
                                <div class="typo-line">
                                    <h4><p class="category">Position</p>A-5-1 </h4>
                                </div>

                                <div class="typo-line">
                                    <h4><p class="category">Date d'Expiration</p>20/05/2025 </h4>
                                </div>

                                <div class="typo-line">
                                    <p class="category">Description</p>
                                    <blockquote>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                                        </p>
                                    </blockquote>
                                </div>
                                
                            </div>
                            <hr>
                        </div>
                    </div> <!-- .col -->

                </div>
            </div>
        </div> <!-- .content -->
<?php
    template('footer', array(
        'path' => '../'
    ));
?>