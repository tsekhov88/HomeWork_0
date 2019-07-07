<?php
echo '<p>100 случайных чисел:</p>';
for($i=0; $i<100; $i++){
	$array[$i] = rand(0,1000);
}
echo '<pre>';
print_r($array);
echo '</pre>';

$indexMax = array_search(max($array), $array);
echo "<p>Максимальное число в массиве: {$array[$indexMax]}</p>";

echo '<p>Все числа, которые больше половины максимального числа в массиве:</p>';
	$indexMax = max($array);
	foreach ($array as $value) {
		if ($value > $indexMax/2) {
			echo '<pre>';
			echo($value);
			echo '</pre>';
		}
	}
echo '<p>Если очередное число больш 900, прервать вывод массива:</p>';	

foreach ($array as $key => $value) {
		echo $value;
		if ($value>900) {
			$array[$i];
			break;
		}
		echo "\n";
	}

	
