<?php
$total = 0;

for ($i = 382345; $i < 843167; $i++) {
	$i = str_split($i);
	//print_r($i);
	$has_doubles = false;
	$increasing = true;
	$has_triples = false;
	for ($j = 0; $j < count($i); $j++) {
		if ($j > 0) {
			if ($i[$j] < $i[$j - 1]) {
				$increasing = false;
			}
			if ($i[$j] === $i[$j - 1]) {
				$has_doubles = true;
			}
			if ($i[$j] === $i[$j - 1] && $i[$j] === $i[$j + 1]) {
				$has_triples = true;
			}
		}
	}
	if ($has_doubles === true && $increasing === true && $has_triples === false) {
		$total += 1;
	}
	$i = implode('', $i);
}
echo $total;