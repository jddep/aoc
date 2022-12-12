<?php
$file = file('./data/day06.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$file = str_split($file[0]);

$chars = 1;
$received = [];
foreach ($file as $letter) {
	array_push($received, $letter);
		$last = array_slice($received, $chars - 14);
		print_r($last);
		if (count(array_unique($last)) === 14) break;
	$chars++;
}
echo $chars;