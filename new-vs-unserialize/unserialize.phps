<?php
require_once dirname(__FILE__) . '/common.phps';

$total_time = 0;

for ($depth = 1; $depth <= DEPTH_UPTO; ++$depth) {
	$serialized = serialize(createTree($depth));

	$time = microtime(TRUE);

	for ($i = 0; $i < N; ++$i) {
		$instance = unserialize($serialized);
	}

	$total_time += microtime(TRUE) - $time;
}

echo $total_time, "\n";
