<?php
$file = file("./data/day04.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($file as $line) {
	$line = explode('-', substr_replace(substr_replace($line, '', -1), '-', -6, 1));
	//print $line . "\n" ;
	$chars = [];
	list($id, $checksum) = array_splice($line, -2);
	$line = str_split(implode('', $line));
	foreach ($line as $char) {
		$chars[$char] += 1;
		arsort($chars);
		//print_r($chars);
	}
	$checksum_copy = str_split($checksum);
	natsort($checksum_copy);
	$checksum_copy = implode('', $checksum_copy);
	//print($checksum) . " - " . var_dump($checksum === $checksum_copy);
	//print $checksum . ' - ' . $checksum_copy . ' - ' . ($checksum === $checksum_copy) . "\n";
}