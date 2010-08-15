<?php
require_once dirname(__FILE__) . '/common.phps';

$stack = new SplStack;
foreach (array_reverse($reference_stack) as $i) {
    $stack[] = $i;
}

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    $stack->pop();
}

var_dump($start + microtime(true));
