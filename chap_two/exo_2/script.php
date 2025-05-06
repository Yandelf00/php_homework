<?php
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;

echo "this is x : $x \n";
echo "this is y : $y \n";
echo "this is z : $z \n";
