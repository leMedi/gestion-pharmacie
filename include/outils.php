<?php
session_start();
session_regenerate_id();


require_once('config.php');
require_once('basedonner.php');

function template($nom, $data = array())
{
    extract($data);
    require __DIR__ . '/../templates/' . $nom . '.php';
}

