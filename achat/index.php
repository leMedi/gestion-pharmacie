<?php
    require_once( __DIR__. '/../include/outils.php');

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
            'title' => 'Achat'
        )); ?> 
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="content">
                                <?php
                                    // var_dump($_SESSION);
                                    template('facture', array(
                                        'medicaments' => medicamentsSession()
                                    ));
                                ?>                                            
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

<script>
    var $total = $('#total');
    $(".input-qte").on('change, mouseup, keyup', function(e) {
        var total = 0;

        $(".input-qte").each(function() {
            $el = $(this);
            var qte = $el.val(),
                prix = $el.parents('tr').data('prix');
            var p = qte*prix;
            console.log(p);
            total += p;
        }, this);

        $total.html(total);
    })
</script>