<?php
require_once dirname(__FILE__) . '/common.phps';

$total_time = 0;

for ($depth = 1; $depth <= DEPTH_UPTO; ++$depth) {
	$time = microtime(TRUE);

	for ($i = 0; $i < N; ++$i) {
		$tree = NULL;

		for ($j = 0; $j < $depth; ++$j) {
			$tree = new Foo('a', 'b', 'c', 'd', $tree);
		}

		$instance = $tree;
	}

	$total_time += microtime(TRUE) - $time;
}

echo $total_time, "\n";
