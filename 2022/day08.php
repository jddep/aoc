<?php
$file = file('./data/day08.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$visible = 0;
for ($i = 0; $i < count($file); $i++) {
	$line = str_split($file[$i]);
	if ($i > 1 && $i < count($file) - 1) {
		$previous_line = str_split($file[$i - 1]);
		$next_line = str_split($file[$i + 1]);
	}
	for ($j = 0; $j < count($line); $j++) {
		if ($i == 0 || $j == 0 || $i == count($file) - 1 || $j == count($line) - 1) {
			$visible += 1;
		} elseif ($i >= 1 && $j >= 1 && $i <= count($file) - 1 && $j <= count($line) - 1) {
			if ($previous_line[$j] < $line[$j] && $next_line[$j] < $line[$j] && $line[$j - 1] < $line[$j] && $line[$j + 1] < $line[$j]) {
				$visible += 1;
			}
		}
	}
}
print $visible;