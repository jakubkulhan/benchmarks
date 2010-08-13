<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = $reference_stack;
$stack_sp = count($reference_stack) - 1;
for ($i = 0; $i < N; $i++) {
    unset($stack[$stack_sp--]);
}

var_dump($start + microtime(true));
