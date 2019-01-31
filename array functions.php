<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Array</title>
  
</head>

<body>
<pre>
<?php
$array = array("img12.png", "img10.png", "img2.png", "img1.png");
natsort($array);
print_r($array);
$ar1 = array(10, "Иванов", 170, 0);
$ar2 = array(1, 3, 2, "Вася");
array_multisort($ar1,SORT_STRING, $ar2);
print_r($ar1);
print_r($ar2);
$ar1 = array(1, 1, 1, 3, 2, 5);
$ar2 = array(5, 6, 2, 2, 3, 5);
array_multisort($ar1, SORT_ASC, $ar2, SORT_DESC);
print_r($ar1);
print_r($ar2);
echo (4>2) ? "Yes" : "No";
function cmp($a, $b)
{
    if (gettype($a) == gettype($b))
     {
        return ($a<$b) ? -1 : 1;
    }
    return (is_string($a)) ? 1 : -1;
}
$arr = array(5, "4", 3, "2", 1);
usort($arr, "cmp");
print_r($arr);
$arr = array("one", "two", "three");
echo current($arr)."</br>";
next ($arr);
echo current($arr)."</br>";
reset ($arr);
echo current($arr)."</br>";
end ($arr);
echo current($arr)."</br>";
$ar2 = array(5, 6, 2, 2, 3, 5);
for ($i=0; $i<=count($ar2); $i++) 
{
    echo $ar2[$i]."</br>";
}
$sum=0;
$n=count($ar2);
for ($i=0; $i<=$n-1; $i++) 
{
    $sum=$sum+ar2[$i];
}
echo $sum;



?>
</pre>


</body>

</html>