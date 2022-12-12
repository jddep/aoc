<?php
$file = file("./data/day02.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

function wrap($a, $b, $c) {
	return (2 * $a * $b) + (2 * $a * $c) + (2 * $b * $c) + min($a * $b, $b * $c, $a * $c);
}
$total = 0;
foreach ($file as $line) {
	$line = explode('x', $line);
	$total += wrap(...$line);
	print wrap(...$line) . "\n";
}
echo $total."\n\n";

function ribbon($a, $b, $c) {
	return ($a * $b * $c) + (2 * min($a + $b, $b + $c, $a + $c));
}
$total = 0;
foreach ($file as $line) {
	$line = explode('x', $line);
	$total += ribbon(...$line);
}
echo $total;