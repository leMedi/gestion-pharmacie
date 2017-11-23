<?php
require_once('../include/outils.php');


$m = new Employers();

$m->nom = "ELBAGHAZAOUI";
$m->prenom = "ELBAGHAZAOUI";
$m->tel =  06;
$m->address =  "ELBAGHAZAOUI";
$m->salaire =  06;
$m->email = "ELBAGHAZAOUI@gmail.com";
$m->password  = "ELBAGHAZAOUI";
$m->admin = "true";

var_dump($m);
var_dump($m->enregistrer());