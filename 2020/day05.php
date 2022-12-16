<?php
$file = file("./data/day05.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$rows = 128;
$cols = 8;
$highest = 0;
foreach ($file as $line) {
	$line = str_split($line);
	$r = [1, $rows];
	$c = [1, $cols];
	foreach ($line as $char) {
		
	}
	print_r([$r, $c]);
}