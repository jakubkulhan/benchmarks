<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = $reference_stack;
for ($i = 0; $i < N; $i++) {
    array_pop($stack);
}

var_dump($start + microtime(true));
