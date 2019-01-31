<!DOCTYPE >
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Array</title>
  
</head>

<body>
<pre>
<h1>Array_reverse</h1>
<?php
$new = array(2,8,14,22,7,111,97,15,72,6);

function reverse($arr) 
{
	for ($i=0; $i<count($arr); $i++) 
		{
			$rev[]=$arr[$i];
		}
	return $rev;    
}
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		reverse($new);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для возвращения массива в обратном порядке, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$new=array_reverse($new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Возвращение массива в обратном порядке с помощью встроенной функции array_reverse, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>
<h1>Array_search</h1>
<?php
$new = array(2,8,14,22,7,111,97,15,72,6);

function my_search($arr,$x) 
{
	for ($i=0; $i<count($arr); $i++) 
		{
            if ($arr[$i]==$x) 
            {
                $key=$i;
            }
		}
	return $key;    
}


$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		my_search($new,8);
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для поиска элемента в массиве, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";

$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$rez=array_search("8", $new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Встроенная функции array_search, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";
?>
<h1>In_array</h1>
<?php
$new = array(2,8,14,22,7,111,97,15,72,6);

function in($arr,$x) 
{
    $ansver="FALSE";
	for ($i=0; $i<count($arr); $i++) 
		{
            if ($arr[$i]==$x) 
            {
                $ansver="TRUE";
            }
		}
	return $ansver;      
}
$new = array(2,8,14,22,7,111,97,15,72,6);
$time_start = microtime(1);

for ($f=1; $f<=10000; $f++)
	{
		in($new,"8");
	}

$time_end = microtime (1);
$time1 = $time_end - $time_start;

echo "Пользовательская функция для поиска элемента в массиве, выполненная 10000 раз занимает $time1 секунд.\n";
echo "<br>";
$time_start = microtime(1);
$new = array(2,8,14,22,7,111,97,15,72,6);

for ($f=1; $f<=10000; $f++)
	{
		$rez=in_array(8,$new);
	}

$time_end = microtime (1);
$time2 = $time_end - $time_start;

echo "Встроенная функции array_search, выполненная 10000 раз занимает $time2 секунд.\n";
echo "<br>";

$rez=round($time1/$time2, 0);
echo "Этот пример показывает, что встроенная функция работает приблизительно в $rez раз быстрее.";
echo "<br>";


?>
</pre>


</body>

</html>