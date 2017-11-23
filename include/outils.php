<?php
session_start();
session_regenerate_id();


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


