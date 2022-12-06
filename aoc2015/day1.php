<?php
$file = file("./data/day1.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$file = str_split($file[0]);

// part 2
$count = 0;
$sum = 0;
foreach ($file as $item) {
	$count++;
	$sum += $item === '(' ? 1 : -1;
	if ($sum === -1) {
		break;
	}
}
echo $count;

//part 1
/*echo array_reduce(
	str_split($file[0]),
	function($a, $b) {
		$a += $b === '(' ? 1 : -1;
		return $a;
	}
);