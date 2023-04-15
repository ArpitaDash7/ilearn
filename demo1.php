<!DOCTYPE html>
<html>
<body>
 
<?php
$txt1 = "Sum of x and y is:";
$x = 1234;
$y = 4321;
 
echo "<h3>" . $txt1 . "</h3>";
echo $x + $y ."<br>";

$a=0;
echo "a is" .is_null($a)."<br>";
$b="null";
echo "b is" .is_null($b)."<br>";
$c=NULL;
echo "c is" .is_null($c)."<br>";
$car= array("Arpita", "Ricky");
var_dump($car);
?>
 
</body>
</html>