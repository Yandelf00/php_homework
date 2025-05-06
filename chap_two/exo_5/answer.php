<?php

$x="PHP5";
echo "\$x value is : $x, \$x type is : ", gettype($x), "\n";
$a[]=&$x;
echo "\$a[0] value is : {$a[0]}, \$a[0] type is : ", gettype($a), "\n";
$y=" 5 eme version de PHP";
echo "\$y value is : $y, \$y type is : ", gettype($y), "\n";
$z=$y*10;
echo "\$z value is : $z, \$z type is : ", gettype($z), "\n";
$x.=$y;
echo "\$x value is : $x, \$x type is : ", gettype($x), "\n";
$y*=$z;
echo "\$y value is : $y, \$y type is : ", gettype($y), "\n";
$a[0]="MySQL";
echo "\$a[0] value is : {$a[0]}, \$a[0] type is : ", gettype($a), "\n";
