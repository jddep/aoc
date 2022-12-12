<?php
$file = file('./data/day07.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

class FileSystem
{
	public function __construct(
		public string $name,
		public mixed $parent = null,
		public array $children = [],
		public int $size = 0
	) {}

	public function addChild(string $name, int $size = 0) {
		$this->children[$name] = new FileSystem(name: $name, parent: $this, size: $size);
		if ($size > 0) {
			$this->updateSize($size);
		}
	}

	public function updateSize(int $size) {
		$this->size += $size;
	}
}

//$last_command = '';
$current = '';
foreach ($file as $line) {
	$line = explode(' ', $line);
	if ($current === '' && $line[0] === '$' && $line[1] === 'cd' && $line[2] === '/') {
		$current = new FileSystem(name: $line[2]);
//		var_dump($current);
	}
	if ($line[0] === 'dir') {
		//var_dump($current);
		$current->addChild($line[1]);
	} elseif (is_numeric($line[0])) {
		//$current->addChild($line[1], $line[0]);
	} elseif ($line[0] === '$' && $line[1] === 'cd') {
		if ($line[2] !== '..' && $line[2] !== '/') {
			//$current = $current->children[$line[2]];
		} else {
			//$current = $current->parent;
		}
	}
}
var_dump($current);
/*
$dirs = [
	'/' => [
		'name' => '/',
		'parent' => NULL,
		'size' => 0
	]
];
$current_dir = '/';
$previous_dir = '';
$last_command = '';
foreach ($file as $line) {
	$line = explode(' ', $line);
	if ($line[0] === '$') {
		if (!empty($current_dir) && $previous_dir !== $current_dir) {
			$previous_dir = $current_dir;
		}
		if ($line[1] === 'cd') {
			
			//print $current_dir . "\n";
			if ($line[2] !== '..') {
				$current_dir = $line[2];
			} else {
				$current_dir = $previous_dir;
			}
		}
		$last_command = $line[1];
	} elseif ($last_command === 'ls' && $line[0] === 'dir') {
		//print $current_dir . "\n";
		$dirs[$previous_dir . '\\' . $current_dir] = [
			'name' => $current_dir,
			'parent' => $previous_dir,
			'size' => 0
		];
		//$dirs[$current_dir . '\\' . $line[1]] = [];
	} elseif (is_numeric($line[0])) {
		//array_push($dirs[$current_dir], [$line[2] => $line[1]]);
		$dirs[$current_dir . '\\' . $line[1]] = [
			'parent' => $current_dir,
			'name' => $line[1],
			'size' => $line[0]
		];
	}
}
$sizes = [];

foreach ($dirs as $k => $v) {
	if (!isset($sizes[$k])) {
		$sizes[$k] = 0;
	}
	$sizes[$k] += $v['size'];
}

$parents = [];
foreach ($sizes as $k => $v) {
	if (!isset($parents[$dirs[$k]['parent']])) {
		$parents[$dirs[$k]['parent']] = 0;
	}
	$parents[$dirs[$k]['parent']] += $dirs[$k]['size'];
}

print_r($sizes);
print_r($parents);
print_r(array_sum(array_filter(
	$parents,
	function($size) {
		return $size <= 100000;
	}
)));
//print $last_command;
//print_r($dirs);
//print_r($sizes);
*/