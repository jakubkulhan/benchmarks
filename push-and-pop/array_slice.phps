<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = $reference_stack;
for ($i = 0; $i < N; $i++) {
    $stack = array_slice($stack, 0, -1);
}

var_dump($start + microtime(true));
