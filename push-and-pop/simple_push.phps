<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = new SimpleStack;
for ($i = 0; $i < N; $i++) {
    $stack->push($i);
}

var_dump($start + microtime(true));
