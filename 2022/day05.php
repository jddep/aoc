<?php
$file = file('./data/day05.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$rows = [
	'tdwzvp',
	'lswvfjd',
	'zmlsvtbh',
	'rsj',
	'czbgfmlw',
	'qwvhzrgb',
	'vjpcbdn',
	'ptbq',
	'hgzrc'
];

$crates = [];
foreach ($rows as $row) {
	$crates[] = str_split($row);
}
print_r($crates);
$commands = [];
for ($i = 9; $i < count($file); $i++) {
	//print_r($file[$i] . "\n");
	$temp = explode(' ', $file[$i]);
	$commands[] = [$temp[1], $temp[3], $temp[5]];
}
print_r($commands);

$new_crates = [];
/*
foreach ($commands as $command) {
	$temp = [];
	for ($i = 0; $i < $command[0]; $i++) {
		$crate = array_pop($crates[$command[1] - 1]);
		array_push($crates[$command[2] - 1], $crate);
	}
}
print_r($crates);
*/

foreach ($commands as $command) {
	$temp = [];
	for ($i = 0; $i < $command[0]; $i++) {
		$crate = array_pop($crates[$command[1] - 1]);
		array_push($temp, $crate);
	}
	for ($i = 0; $i < $command[0]; $i++) {
		$crate = array_pop($temp);
		array_push($crates[$command[2] - 1], $crate);
	}
}
print_r($crates);