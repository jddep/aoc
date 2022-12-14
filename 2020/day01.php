<?php
$file = file("./data/day01.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
// $file = [
// 	1721,
// 979,
// 366,
// 299,
// 675,
// 1456
// ];

$needs = [];
foreach ($file as $line) {
	if (isset($needs[$line])) {
		echo $line * $needs[$line];
		break;
	} else {
		$needs[2020 - $line] = $line;
	}
}