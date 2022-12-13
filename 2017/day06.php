<?php
$file = file("./data/day06.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$file = explode("\t", $file);

$count = 0;
$max = 0;
$seen = [];
while (!in_array($file, $seen)) {
	$max = $max > 0 ? $max : max($file);
}
print $count;