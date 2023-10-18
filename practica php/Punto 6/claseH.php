<hr>
<h1> <b> Fibonacci </b> </h1>
<?php
$a=0;
$b=1;
for ($i=0; $i < 12 ; $i++)
 {
  $suma=$a+$b;
  echo $b.  "<br>";
  $a=$b;
  $b=$suma;
 }