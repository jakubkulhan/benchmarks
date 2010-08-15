<?php
require_once dirname(__FILE__) . '/common.phps';

$array = array();

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    $array[$i] = $i;
}

var_dump($start + microtime(true));
