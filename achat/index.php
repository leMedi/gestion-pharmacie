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
            'title' => 'Achat',
            'actions' => array(
                array(
                    'nom'   => 'Effacer',
                    'icon'  => 'fa fa-trash',
                    'lien'  => '/achat/handler.php?clear=yes'
                )
            )
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
    var $totalPayer = $('#payer');
    var $client = $('#client');
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
    });

    $("#facturer").click(function(e){
        e.preventDefault();
        var total = 0;
        $(".item").each(function(){
            var $this = $(this),
                id    = $this.data('id'),
                prix  = $this.data('prix'),
                qte   = $this.find('.input-qte').val();

            total += prix*qte;
            $.post('<?= lien('/achat/handler.php') ?>',
            {
                action: 'update_stock',
                id: id,
                qte: qte   
            })
            .done(function (data) {
                console.log(data);
            });
        });

        var credit = total - $totalPayer.val(); 
        $.post('<?= lien('/achat/handler.php') ?>',
        {
            action: 'update_debt',
            id: $client.data('id'),
            credit: credit   
        })
        .done(function (data) {
            console.log(data);
            location.reload();
        });

        // location.reload();
        // return false;
    })
</script>