<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>date</title>
  
</head>

<body>
<pre>
<?php

function sum($sort) 
{
	$sum=1;
	foreach ($sort as $value) 
		{
			$sum=$sum*$value;
		}
	return $sum;    
}

function sumarray($sort) 
{
	$sum=1;
	for ($k=0; $k<count($sort); $k++) 
		{
			$sum=$sum*$sort[$k];
		}
	return $sum;    
}

$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		sumarray($new);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Произведение массива из 10 элементов c помощью пользовательской функции for, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		sum($new);
	}

$time_end = microtime (1);
$time3 = $time_end - $time_start;

echo "Произведение массива из 10 элементов c помощью пользовательской функции foreach, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$sum2=array_product($new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Произведение массива из 10 элементов с помощью встроенной функции array_product, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";

$rez=round($time3/$time1, 0);
echo "<br>"; 
echo "Этот пример показывает, что встроенная функция foreach по сравнению с for работает приблизительно в $rez раз быстрее.";
?>
</pre>
</body>

</html>
