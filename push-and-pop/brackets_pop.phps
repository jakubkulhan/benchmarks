<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = $reference_stack;
for ($i = 0; $i < N; $i++) {
    end($stack);
    unset($stack[key($stack)]);
}

var_dump($start + microtime(true));
