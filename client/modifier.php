<?php
require_once( __DIR__. '/../include/outils.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["client"])) {
    
    $client_modifier = $_POST["client"];

    $client = new Clients();
    $client = $client->trouver('id', $client_modifier['id']);

    $client->remplire_PDO($client_modifier);

    $result = $client->enregistrer();

    // dd($result);

    if($result === true)
        header('Location:info.php?id=' . $client->id);
    else
        dd("error");

}else if(isset($_GET["id"])) {
    $client = new Clients();
    $client = $client->trouver('id', $_GET['id']);

    if($client == false)
        header('Location:index.php');
    
    $client = $client->toArray();

    // dd($client);

    include "modifier.view.php";

}else
    header('Location:index.php');
?>