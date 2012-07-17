<?php
require_once dirname(__FILE__) . '/common.phps';

$o = (object) array("loaded" => false);

$time = microtime(TRUE);

for ($i = 0; $i < N; ++$i) {
	if (isset($o->loaded) && !$o->loaded) {}
}

echo microtime(TRUE) - $time . "\n";
