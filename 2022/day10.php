<?php
$file = file('./data/day10.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$count = count($file);
$sum = 1;
$sums = [];
$cycles = 0;
$addx = 0;
for ($i = 0; $i < $count; $i++) {
	/*if ($i >= 2) {
		$line = explode(' ', $file[$i - 2]);
		print_r($line);
	}
	if ($i >= 2) {
		$sum += $line[1] ?? 0;
		print ($i) . '. ' . $sum . "\n";
	}
	if (in_array($i, [11, 31, 61, 71, 91, 111])) {
		array_push($sums, ($sum * (($i - 1) * 2)));
	}*/
	
	$line = explode(' ', $file[$i]);
	$cycles += $line[0] === 'addx' ? 2 : 1;
	$addx += $line[0] === 'addx' ? 2 : 0;
	if (in_array($addx, [20, 60, 100, 140, 180, 220])) {
		array_push($sums, $addx * $sum);
	}
	if ($line[0] === 'addx') {
		$sum += $cycles % 2 === 0 ? $line[1] : 0;
	}
}
print_r($sums);
print array_sum($sums);