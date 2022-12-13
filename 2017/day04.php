<?php
$file = file("./data/day04.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$total = 0;
foreach ($file as $line) {
	$line = explode(' ', $line);
	//print_r(array_unique($line));
	print "Total: " . count($line) . ' - Unique: ' . count(array_count_values($line)) . "\n";
	if (count($line) === count(array_count_values($line))) {
		$total += 1;
	}
}
echo $total;

// part 2
foreach ($file as $line) {
	$line = array_map('str_split', explode(' ', $line));
	for ($i = 0; $i < count($line); $i++) {
		for ($j = 0; $j < count($line); $j++) {
			if ($i === $j) {
				continue;
			} elseif (count($line[$i]) === count($line[$j]) && count($line[$i])) {
				// will come back to this later
			}
		}
	}
}