<?php
require_once( __DIR__. '/../include/outils.php');


// if(isset($_GET['q']))

$clients = new Clients();
if(isset($_GET["col"]) && isset($_GET["q"])) {
    
    // $clients = new clients();
    
    $col = $_GET["col"];
    $val = $_GET["q"];
    // dd($col);
    switch($col) {
        case 'id':
            $clients = $clients->trouver($col, $val);
            // dd($clients);
            if($clients != false)
                header('Location:info.php?id=' . $clients->id);

            $clients = array();
            break;
        case 'nom':
            $clients = $clients->cherche('nom', $val);
        break;
    }

    // else
        // include "modifier.view.php";
    include "index.view.php";

}else {
    $clients = $clients->tous();
    include "index.view.php";
}
?>