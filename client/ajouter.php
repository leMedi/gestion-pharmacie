<?php

require_once( __DIR__. '/../include/outils.php');

$client = new Clients;

$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["client"]) ) {

  $clients = new Clients($_POST["client"]);

    $result = $clients->enregistrer();

    if($result === true)
        header('Location:index.php');
}

include "ajouter.view.php";
