<?php
require_once( __DIR__. '/../include/outils.php');

$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["medicament"])) {
    
    $medicaments = new Medicaments($_POST["medicament"]);

    $result = $medicaments->enregistrer();

    if($result === true)
        header('Location:index.php');
}

include "ajouter.view.php";
?>