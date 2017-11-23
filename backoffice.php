<?php

require __DIR__. '/include/outils.php';


?>


<?php
    template('header');
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
                    <div class="col-md-3">
                        <?php template('components/statscard', array(
                                    'title' => 'Medicament',
                                    'subtitle' => 'Nombre total des medicament',
                                    'stats' => '104',
                                )
                        ); ?>
                    </div>

                    <div class="col-md-3">
                        <?php template('components/statscard', array(
                                    'title' => 'Clients Fidele',
                                    'subtitle' => 'Nombre total des Client',
                                    'stats' => '57',
                                )
                        ); ?>
                    </div>

                    <div class="col-md-3">
                        <?php template('components/statscard', array(
                                    'title' => 'Cachiers',
                                    'subtitle' => 'Nombre total des cachiers',
                                    'stats' => '5',
                                )
                        ); ?>
                    </div>
                </div>
            </div>
        </div> <!-- .content -->
<?php
    template('footer');
?>