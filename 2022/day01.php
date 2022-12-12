<?php
$file = file("./data/day01.txt");

$i = [];
$elf = 1;
foreach ($file as $line) {
	if ($line == "\n") $elf++;
	$i[$elf] += $line;
}

arsort($i);
print_r($i);