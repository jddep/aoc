<?php
$file = file("./data/day02.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$total = 0;

foreach ($file as $line) {
	$line = explode(' ', $line);
	list($min, $max) = explode('-', $line[0]);
	$char = str_replace(':', '', $line[1]);
	$count = 0;
	$line[2] = str_split($line[2]);
	foreach ($line[2] as $pw) {
		$count += $pw === $char ? 1 : 0;
	}
	if ($count >= $min && $count <= $max) {
		$total++;
	}
}
echo $total . "\n";

// part 2
$total = 0;

foreach ($file as $line) {
	$line = explode(' ', $line);
	list($first, $second) = explode('-', $line[0]);
	$char = str_replace(':', '', $line[1]);
	//$count = 0;
	$line[2] = str_split($line[2]);
	if (!($line[2][$first - 1] === $char && $line[2][$second - 1] === $char) && ($line[2][$first - 1] === $char || $line[2][$second - 1] === $char)) {
		$total++;
	}
}
echo $total;