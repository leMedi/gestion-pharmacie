<?php

require __DIR__. '/include/outils.php';


?>


<?php
    template('header');
?>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="public/img/sidebar-5.jpg">
        <?php template('sidebar'); ?> 
    </div> <!-- .sidebar -->

    <div class="main-panel">
        <?php template('nav'); ?> 
    
        <div class="content">
            <div class="container-fluid">
                
            </div>
        </div> <!-- .content -->
<?php
    template('footer');
?>