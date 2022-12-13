<?php
$file = file("./data/day06.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$totals = [];
foreach ($file as $line) {
	$line = str_split($line);
	foreach ($line as $key => $char) {
		$totals[$key][$char] += 1;
	}
}
$common = [];
$least_common = [];
foreach ($totals as $k => $v) {
	$common[] = array_search(max($v), $v);
	$least_common[] = array_search(min($v), $v);
}
$common = implode('', $common);
$least_common = implode('', $least_common);
print $common . "\n" . $least_common;
