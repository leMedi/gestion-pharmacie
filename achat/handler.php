<?php
require __DIR__. '/../include/outils.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    switch($_POST['action'])
    {
        case 'ajouter_p':
            // ajouter produit
            $_SESSION['medicaments'][] = $_POST['id'];
            die('ok');
            break;
        case 'enlever_p':
            // enlever produit
            $index = array_search($_POST['id'], $_SESSION['medicaments']);

            if($index !== false)
                unset($_SESSION['medicaments'][$index]);
            die('ok');
            break;
        case 'enlever_p2':
            $index = array_search($_POST['id'], $_SESSION['medicaments']);
            // enlever produit + redirect
            if($index !== false)
                unset($_SESSION['medicaments'][$index]);
            
            header('Location:' . site . '/achat/index.php');
            break;
        case 'clientf':
            $_SESSION['client'] = $_POST['id'];  
            header('Location:' . site . '/achat/index.php');
            break;
        case 'clientfa':
            $_SESSION['client'] = -1;  
            header('Location:' . site . '/client/');
            break;
        default:
            header('Location:' . site . '/backoffice.php');
    }
}
else
    header('Location:' . site . '/backoffice.php');