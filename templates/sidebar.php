<?php global $current_user; ?>
<div class="sidebar-wrapper">
    <div class="logo">
        <a href="<?= lien('/') ?>" class="simple-text">
            Pharmacie GI
        </a>
    </div>

    <ul class="nav">
        <li class="<?= active('backoffice') ?>">
            <a href="<?= lien('/backoffice.php') ?>">
                <i class="pe-7s-graph"></i>
                <p>Backoffice</p>
            </a>
        </li>

        <li class="<?= active('/achat') ?>">
            <a href="<?= lien('/achat/') ?>">
                <i class="pe-7s-shopbag"></i>
                <p>Achat</p>
            </a>
        </li>

        <li class="<?= active('/medicaments') ?>">
            <a href="<?= lien('/medicaments/') ?>">
                <i class="pe-7s-shopbag"></i>
                <p>Medicaments</p>
            </a>
        </li>

        <li class="<?= active('/client') ?>">
            <a href="<?= lien('/client/') ?>">
                <i class="pe-7s-users"></i>
                <p>Clients</p>
            </a>
        </li>

        <?php if($current_user->estAdmin() ): ?>

        <li class="<?= active('/employe') ?>">
            <a href="<?= lien('/employe/') ?>">
                <i class="pe-7s-id"></i>
                <p>Employes</p>
            </a>
        </li>

    <?php endif; ?>
        
    </ul>
</div> <!-- .sidebar-wrapper -->