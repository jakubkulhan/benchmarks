<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
$stack = array();
for ($i = 0; $i < N; $i++) {
    $stack[] = $i;
}

var_dump($start + microtime(true));
