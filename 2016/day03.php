<?php
$file = file("./data/day03.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

function valid_triangle(int $a, int $b, int $c): bool {
	$max = max($a, $b, $c);
	$min = min($a, $b, $c);
	return $a + $b + $c - $max > $max;
}

$total = 0;
foreach ($file as $line) {
	$line = array_filter(explode(' ', $line));
	$total += valid_triangle(...$line) ? 1 : 0;
}
echo $total;

// part 2
$one = [];
$two = [];
$three = [];
foreach ($file as $line) {
	$line = array_values(array_filter(explode(' ', $line)));
	array_push($one, $line[0]);
	array_push($two, $line[1]);
	array_push($three, $line[2]);
}
$new = array_merge($one, $two, $three);
//print_r($new);
$total = 0;
for ($i = 0; $i < count($new); $i += 3) {
	$total += valid_triangle($new[$i], $new[$i + 1], $new[$i + 2]) ? 1 : 0;
}
echo $total;