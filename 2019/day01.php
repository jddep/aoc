<?php
$file = file("./data/day01.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$total = 0;
foreach ($file as $line) {
	$fuel = floor($line / 3) - 2;
	$total += $fuel;
	while ($fuel > 0) {
		$fuel = floor($fuel / 3) - 2;
		$total += $fuel > 0 ? $fuel : 0;
	}
}
echo $total;

