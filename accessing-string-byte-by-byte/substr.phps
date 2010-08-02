<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

for ($i = 0; $i < N; ++$i) {
    for ($j = 0, $c = strlen($str); $j < $c; ++$j) {
        dummy(substr($str, $j, 1));
    }
}

var_dump($start + microtime(true));
