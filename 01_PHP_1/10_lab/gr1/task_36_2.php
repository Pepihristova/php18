<?php 

$arr = [];
$rows = 5;
$cols = 5;
$value = 1;

for($i = 0; $i < $rows; $i++){
	$value = $i*5 + 1;	
	for($k = 0; $k < $cols; $k++){
		$arr[$i][$k] = $value;
		$value++;
	}	
}
// echo '<pre>';
// var_dump($arr);
// echo '</pre>';

echo "<table border=1>";
for ($m=$rows-1; $m >= 0; $m--) { 
// for ($m=0; $m < $rows; $m++) { 
	echo "<tr>";
	for ($n=$cols-1; $n >= 0; $n--) { 
	// for ($n=0; $n < $cols; $n++) { 
		echo "<td>{$arr[$m][$n]}</td>";
	}
	echo "</tr>";
}
echo "</table>";