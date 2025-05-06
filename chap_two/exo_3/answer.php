<?php

// GLOBALS est un tableau superglobal en PHP
// qui contient toutes les variables globales
// disponibles dans le script

$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;

echo $GLOBALS['x'];
echo $GLOBALS['y'];
echo $GLOBALS['z'];
