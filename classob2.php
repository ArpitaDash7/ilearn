<!DOCTYPE html>
<html>
<body>
<?php
$t = date("H");
if ($t < "4") {
echo "have a great day!";
}
else
{
    echo "Good afternoon\n";
}
function writeMsg($quantity,$cost)
{
   $total=$quantity*$cost;
   echo "The total cost of a product is: $total";

}

writeMsg(20, 500);

function Marks($m1,$m2,$m3,$m4,$m5)
{
$sum= $m1+$m2+$m3+$m4+$m5;
$avg= $sum/5;
echo "the average of the marks is: $avg";
}

Marks();
?>
</body>
</html>