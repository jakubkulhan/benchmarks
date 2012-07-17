<?php
require_once dirname(__FILE__) . '/common.phps';

$_stack = array();
$_sp = -1;

$time = microtime(TRUE);
$i = 0;
loop1:
	if ($i >= N) goto endloop1;
	$_stack[++$_sp] = 1;
	$_stack[++$_sp] = "b";
	$_stack[++$_sp] = "a";
	goto concat;
	ret:
		$result = $_stack[$_sp--];
	++$i;
	goto loop1;
endloop1:
echo microtime(TRUE) - $time . "\n";

return;

concat:
	$ret = $_stack[$_sp - 2];
	$_stack[$_sp - 2] = $_stack[$_sp] . $_stack[$_sp - 1]; $_sp -= 2;
	if ($ret === 1) { goto ret; } else { goto error; }

error:
