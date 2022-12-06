<?php
$file = file("./data/day2.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$A = $X = 1;
$B = $Y = 2;
$C = $Z = 3;

$beats = ['A' => 'Y', 'B' => 'Z', 'C' => 'X'];
$total = 0;
foreach ($file as $game) {
	list($them, $you) = explode(' ', $game);
	$score = $$you;
	if ($beats[$them] === $you) {
		$score += 6;
	} elseif ($$you === $$them) {
		$score += 3;
	}
	$total += $score;
}

//echo $total;

// part 2
$scores = ['X' => 0, 'Y' => 3, 'Z' => 6];
$total = 0;
$loses = ['A' => 'C', 'B' => 'A', 'C' => 'B'];
foreach ($file as $game) {
	list($them, $result) = explode(' ', $game);
	$score = $scores[$result];
	if ($result === 'Y') {
		$score += $$them;
	} elseif ($result === 'X') {
		$score += ${$loses[$them]};
	} else {
		$score += ${$beats[$them]};
	}
	$total += $score;
}
echo $total;