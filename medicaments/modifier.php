<?php
require_once( __DIR__. '/../include/outils.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["medicament"])) {
    
    $medicament_modifier = $_POST["medicament"];

    $medicament = new Medicaments();
    $medicament = $medicament->trouver('id', $medicament_modifier['id']);

    $medicament->remplire_PDO($medicament_modifier);

    $result = $medicament->enregistrer();

    // dd($result);

    if($result === true)
        header('Location:info.php?id=' . $medicament->id);
    else
        dd("error");

}else if(isset($_GET["id"])) {
    $medicament = new Medicaments();
    $medicament = $medicament->trouver('id', $_GET['id']);

    if($medicament == false)
        header('Location:index.php');
    
    $medicament = $medicament->toArray();

    // dd($medicament);

    include "modifier.view.php";

}else
    header('Location:index.php');
?>