<?php
session_start();
session_regenerate_id();

init_session();

require_once('config.php');
require_once('basedonner.php');
require_once('Acteur.php');

// dump and die
function dd($var)
{
    var_dump($var);
    die();
}

function template($nom, $data = array())
{
    extract($data);
    require __DIR__ . '/../templates/' . $nom . '.php';
}

function lien($lien)
{
    return site . $lien;
}

// verifie si un lien contient un string
function lienContient($path = null)
{
    $url = $_SERVER['REQUEST_URI'];
    if($path == null)
        return ($path == '/' || $path == '/index.php');
    else {
        return strpos($url, $path);
    }
}

// pour la bar de naviagtion
// return 'active' c'est le url contient un string
function active($path = null)
{
    if(lienContient($path))
        return 'active';
    return '';
}

// select input
// return 'selected'
function select($param, $str, $default = false)
{
    if(
        (isset($_GET[$param]) && $_GET[$param] == $str)
        || $default
    )
        return 'selected';
    return '';
}
 
function pageProteger(){
    if(isset($_SESSION['connecter']) && $_SESSION['connecter'] && isset($_SESSION['user_id'])){
        $employe = new Employers;
        $employe = $employe->trouver('id', $_SESSION['user_id']);
        return $employe;
    }else{
        $_SESSION['connecter'] = false;
        $_SESSION['user_id'] = -1;
        header('Location:'. lien('/login.php'));
   
    }
}

<<<<<<< HEAD
function init_session()
{
    if(!isset($_SESSION['medicaments'])){
        $_SESSION['medicaments'] = array();
    }
    if(!isset($_SESSION['client'])){
        $_SESSION['client'] = -1;
    }
    
}

function medicamentsSession()
{
    $medicaments = array();
    foreach ($_SESSION['medicaments'] as $id) {
        $medicament = new Medicaments();
        $medicament = $medicament->trouver('id', $id);
        if($medicament)
            $medicaments[] = $medicament;
    }
    return $medicaments;
}




=======
$current_user = NULL;
if(!lienContient('login.php')){
    $current_user = pageProteger();
}
>>>>>>> 36e5457ab08f6e351d7b3511e26ee8e330974750
