<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Task - 5</title>
</head>
<body>

<?php 

$foos = array(
	array('i' => 8, 'j' => 0), 
	array('i' => 9, 'j' => 1), 
	array('i' => 13, 'j' => 'dom'),
	array('i' => 9, 'j' => 1),
	array('i' => 99, 'j' => 30), 
	array('i' => 1, 'j' => 28)
);

echo "<table border='1' cellpadding='5'>";

$a = 0;
foreach($foos as $foo){
	if($a % 2 == 0){
		echo "<tr style='background-color:#ddd;'><td class='cell'>" . $foo['i'] . "</td><td class='cell'>" . $foo['j'] . "</td></tr>";
	
	} else {
		echo "<tr><td class='cell'>" . $foo['i'] . "</td><td class='cell'>" . $foo['j'] . "</td></tr>";
	}
	$a++;
};


$summ = 0;
foreach($foos as $v){
	$summ += $v[i];
}
foreach($foos as $v){
	$summ += $v[j];
}

echo '<tr><td colspan=2 style="font-weight:bold; text-align:center;">' . $summ . '</td></tr>';

echo "</table>";

?>
</body>
</html>