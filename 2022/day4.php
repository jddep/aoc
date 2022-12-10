<?php
$file = file('./data/day4.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
//$file = ['2-4,6-8', '2-3,4-5', '5-7,7-9', '2-8,3-7', '6-6,4-6', '2-6,4-8'];

$pairs = [];
foreach ($file as $line) {
	$line = explode(',', $line);
	$pairs[] = [explode('-', $line[0]), explode('-', $line[1])];
}
$count = 0;
foreach ($pairs as $pair) {
	if (($pair[0][0] <= $pair[1][0] && $pair[0][1] >= $pair[1][1]) || ($pair[0][0] >= $pair[1][0] && $pair[0][1] <= $pair[1][1])) {
		$count++;
	}
}
print $count;

$count = 0;
foreach ($pairs as $pair) {	
	if ($pair[0][1] >= $pair [1][0] && $pair[0][0] <= $pair[1][1]) {
		$count++;
	}
}
print "\n" . $count;