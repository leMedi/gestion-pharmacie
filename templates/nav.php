<?php global $current_user; ?>
<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?= isset($title) ? $title : 'Backoffice' ?></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul id="nav-header" class="nav navbar-nav navbar-left">
                <?php
                    $actions = isset($actions) ? $actions : array() ;
                    foreach ($actions as $action):
                ?>
                <li>
                    <a href="<?= site . $action['lien'] ?>" class="btn btn-primary">
                        <i class="<?= $action['icon'] ?>"></i>
                        <?= $action['nom'] ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li >
                    
                    <a>
                        <i class="fa fa-user"></i>
                        <?= $current_user->nom; ?>
                        
                    </a>
                    
                </li>
                <li>
                    <a href=<?= lien('/logout.php') ?>>
                        <p>Deconexion</p>
                    </a>
                </li>
                <li class="separator hidden-lg"></li>
            </ul>
        </div>
    </div>
</nav>
