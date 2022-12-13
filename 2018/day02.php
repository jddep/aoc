<?php
$file = file("./data/day02.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$main_counts = ['two' => 0, 'three' => 0];
foreach ($file as $line) {
	$line = str_split($line);
	$counts = [];
	foreach ($line as $letters) {
		$counts[$letters] += 1;
	}
	print_r(array_unique(array_values($counts)));
	foreach (array_unique(array_values($counts)) as $key => $count) {
		if ($count === 2) {
			$main_counts['two'] += 1;
		} elseif ($count === 3) {
			$main_counts['three'] += 1;
		}
	}
}
echo $main_counts['two'] * $main_counts['three'];