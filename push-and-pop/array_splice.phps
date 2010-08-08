<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = $reference_stack;
for ($i = 0; $i < N; $i++) {
    array_splice($stack, -1);
}

var_dump($start + microtime(true));
