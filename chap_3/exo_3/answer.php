<?php

do 
{
	$x = rand(0, 1000);
	$y = rand(0, 1000);
	$z = rand(0, 1000);
	echo $x, ",", $y, ",", $z, "\n";
}
while ($x%2==1 OR $y%2==0 OR $z%2==0);
