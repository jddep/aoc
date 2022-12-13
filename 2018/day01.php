<?php
$file = file("./data/day01.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$total = 0;
foreach ($file as $line) {
	$total += substr($line, 0, 1) === '+' ? substr($line, 1) : -substr($line, 1);
}
echo $total;

// part 2
echo "\n";
$results = [];
$total = 0;
/*foreach ($file as $line) {
	$total += substr($line, 0, 1) === '+' ? substr($line, 1) : -substr($line, 1);
	if (!in_array($total, $results)) {
		$results[] = $total;
	} else {
		return array_search($total, $results);
	}
}*/
//$file = ['+1', '-2', '+3', '+1'];
while (true) {
	foreach ($file as $line) {
		$total += substr($line, 0, 1) === '+' ? substr($line, 1) : -substr($line, 1);
		if (!in_array($total, $results)) {
			$results[] = $total;
		} else {
			echo $total;
			break(2);
		}
	}
}
//print_r($results);
//echo array_search($total, $results);