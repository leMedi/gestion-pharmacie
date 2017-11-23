
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
            'title' => 'Medicaments',
            'actions' => array(
                array(
                    'nom'   => 'Ajouter',
                    'icon'  => 'fa fa-plus',
                    'lien'  => '/medicaments/ajouter.php'
                )
            )
        )); ?> 
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-push-3 col-lg-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Recherche</h4>
                            </div>
                            <div class="content">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <select name="col" class="form-control">
                                            <option value="ref" <?= select('col', 'ref', true) ?>>Ref</option>
                                            <option value="nom" <?= select('col', 'nom') ?>>Nom</option>
                                        </select>                                                
                                    </div> <!-- .form-group -->
                                    <div id="med-chercher-input" class="form-group">
                                        <input name="q" type="text" class="form-control">
                                    </div> <!-- .form-group -->
                                    <button type="submit" class="btn btn-default">Chercher</button>
                                </form>
                                            
                            </div>
                        </div>
                    </div> <!-- .col -->

                    <div class="col-md-12">
                        <?php if(count($medicaments) == 0 && isset($_GET['q'])): ?>
                                <div class="card">
                                    <div class="header">
                                        <h4 class="title"><?= $_GET['q'] ?></h4>
                                        <p class="category">Resultat de recherche</p>
                                    </div>
                                    <div class="content">
                                        <div class="alert alert-danger" role="alert">
                                            Aucun resultat trouver pour le term <?= $_GET['q'] ?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            elseif(count($medicaments) != 0 && isset($_GET['q'])):
                                template('medicaments.table', array(
                                    'title'         => $_GET['q'],
                                    'subtitle'      => 'Resultats de recherche',
                                    'medicaments'   => $medicaments
                                ));
                            elseif(count($medicaments) != 0):
                                template('medicaments.table', array(
                                    'title'         => 'Les Medicaments',
                                    'subtitle'      => 'Tous les medicaments disponible dans le stock',
                                    'medicaments'   => $medicaments
                                ));
                            endif;
                        ?>
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
    $('.btn-add-cart').click(function(e){
        e.preventDefault();
        $this = $(this);

        var estAjouter = $this.hasClass('btn-success');
        var action =  estAjouter ? 'ajouter_p' : 'enlever_p';

        $.post('<?= lien('/achat/handler.php') ?>',
        {
            action: action,
            id: $this.data('id')   
        })
        .done(function (data) {
            console.log(data);
            if(data == 'ok'){
                if(estAjouter)
                    $this.removeClass('btn-success').addClass('btn-warning').html('<span class="pe-7s-shopbag"></span> Retirer du panier');
                else
                    $this.addClass('btn-success').removeClass('btn-warning').html('<span class="pe-7s-shopbag"></span> Ajouter au Panier');
            }
        });
    })
</script>