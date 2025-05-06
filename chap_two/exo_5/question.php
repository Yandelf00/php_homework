<?php
// Donner la valeur de chacune des variables pendant et à la fin du
// script suivant et vérifier l’évolution du type de ces variables

$x="PHP5";
$a[]=&$x;
$y="5 eme version de PHP";
$z=$y*10;
$x.=$y;
$y*=$z;
$a[0]="MySQL";

