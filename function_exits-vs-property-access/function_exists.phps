<?php
require_once dirname(__FILE__) . '/common.phps';

$time = microtime(TRUE);

for ($i = 0; $i < N; ++$i) {
	if (!function_exists('foo')) {}
}

echo microtime(TRUE) - $time . "\n";
