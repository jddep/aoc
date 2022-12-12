<?php
$file = file('./data/day03.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
/*$file = 'vJrwpWtwJgWrhcsFMMfFFhFp
jqHRNqRjqzjGDLGLrsFMfFZSrLrFZsSL
PmmdzqPrVvPwwTWBwg
wMqvLMZHhHMvwLHjbvcjnnSBnvTQFn
ttgJtRGJQctTZtZT
CrZsJsPPZsGzwwsLwLmpwMDw';
$file = explode("\n", $file);*/

$alphabet = array_merge(range('a', 'z'), range('A', 'Z'));
$new = [];
foreach ($alphabet as $k => $v) {
	$new[$v] = $k + 1;
}

$sum = 0;
foreach ($file as $line) {
	$length = strlen($line);
	list($half1, $half2) = str_split($line, $length / 2);
	print $half1 . " :: " . $half2 . " (" . strlen($half1) . " - " . strlen($half2) . ")\n";
	$common = array_unique(array_intersect(str_split($half1), str_split($half2)));
	foreach ($common as $common) {
		$sum += $new[$common];
	}
	//$sum += $new[$common];
}
echo $sum;

// part 2
$sum = 0;
for ($i = 0; $i < count($file); $i += 3) {
	$common = array_unique(array_intersect(str_split($file[$i]), str_split($file[$i + 1]), str_split($file[$i + 2])));
	print_r($common);
	foreach ($common as $common) {
		$sum += $new[$common];
	}
}
echo $sum;