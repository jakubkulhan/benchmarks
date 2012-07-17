<?php
require_once dirname(__FILE__) . '/common.phps';

function concat($a, $b) { return $a . $b; }

$time = microtime(TRUE);
$i = 0;
loop2:
	if ($i >= N) goto endloop2;
	$result = concat("a", "b");
	++$i;
	goto loop2;
endloop2:
echo microtime(TRUE) - $time . "\n";
