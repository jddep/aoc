<?php
$file = file("./data/day06.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$total = 0;
foreach ($file as $line) {
	$line = explode(' ', str_replace(['[', ']'], ' ', $line));
}