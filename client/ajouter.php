<?php

require_once( __DIR__. '/../include/outils.php');

$client = new Clients;

$errors = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["tel"]) && isset($_POST["montant_restant"]) && isset($_POST["adresse"])) {

  $client->nom = $_POST["nom"];
  $client->prenom = $_POST["prenom"];
  $client->tel = $_POST["tel"];
  $client->montant_restant = $_POST["montant_restant"];
  $client->adresse = $_POST["adresse"];

  $result = $client->enregistrer();

  if($result === true)
    
    header('Location:index.php');
  else 
    $error = $result;
}

include "ajouter.view.php";
