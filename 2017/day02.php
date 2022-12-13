<?php
$file = file("./data/day02.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$total = 0;
foreach ($file as $line) {
	$line = array_values(array_filter(explode("\t", $line)));
	$total += max($line) - min($line);
}
echo $total;

// part 2
echo "\n";
$total = 0;
foreach ($file as $line) {
	$line = array_values(array_filter(explode("\t", $line)));
	for ($i = 0; $i < count($line); $i++) {
		for ($j = 0; $j < count($line); $j++) {
			if ($i === $j) {
				continue;
			} elseif ($line[$i] % $line[$j] === 0) {
				$total += $line[$i] / $line[$j];
				break(2);
			} elseif ($line[$j] % $line[$i] === 0) {
				$total += $line[$j] / $line[$i];
				break(2);
			}
		}
	}
}
echo $total;