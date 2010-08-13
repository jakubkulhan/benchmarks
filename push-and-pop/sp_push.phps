<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = array();
$stack_sp = -1;
for ($i = 0; $i < N; $i++) {
    $stack[++$stack_sp] = $i;
}

var_dump($start + microtime(true));
