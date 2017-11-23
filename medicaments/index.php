<?php
require_once( __DIR__. '/../include/outils.php');


// if(isset($_GET['q']))

$medicaments = new Medicaments();
if(isset($_GET["col"]) && isset($_GET["q"])) {
    
    // $medicaments = new Medicaments();
    
    $col = $_GET["col"];
    $val = $_GET["q"];
    // dd($col);
    switch($col) {
        case 'ref':
            $medicaments = $medicaments->trouver($col, $val);
            // dd($medicaments);
            if($medicaments != false)
                header('Location:info.php?id=' . $medicaments->id);

            $medicaments = array();
            break;
        case 'nom':
            $medicaments = $medicaments->cherche('nom', $val);
        break;
    }

    // else
        // include "modifier.view.php";
    include "index.view.php";

}else {
    $medicaments = $medicaments->tous();
    include "index.view.php";
}
?>