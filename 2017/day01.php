<?php
$file = file("./data/day01.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$file = str_split($file[0]);
$previous = '';
$count = 0;
for ($i = 0; $i < count($file); $i++) {
	if ($i === 0) {
		$count += $file[$i] === $file[count($file) - 1] ? $file[$i] : 0;
	} else {
		$count += $file[$i] === $file[$i - 1] ? $file[$i] : 0;
	}
}
echo $count;

// part 2
echo "\n";
$count = 0;
for ($i = 0; $i < count($file) / 2; $i++) {
	$count += $file[$i] === $file[$i + (count($file) / 2)] ? $file[$i] * 2 : 0;
}
echo $count;