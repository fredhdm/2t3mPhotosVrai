<?php
ini_set(default_charset, "");


//*****Informations relatives à la navigation*****//
$domaineEnCours = (($_SERVER["HTTPS"]=='on')?('https'):('http')) . "://". $_SERVER['HTTP_HOST'];
$urlEnCours = $_SERVER['REQUEST_URI'];


?>