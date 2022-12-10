<?php
$file = file("./data/day2.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

function wrap($a, $b, $c) {
	return (2 * $a * $b) + (2 * $a * $c) + (2 * $b * $c) + (($a >= $b ? $b : $a) * ($a >= $c ? $c : $a));
}
$total = 0;
foreach ($file as $line) {
	$line = explode('x', $line);
	$total += wrap(...$line);
	print wrap(...$line) . "\n";
}
echo $total;