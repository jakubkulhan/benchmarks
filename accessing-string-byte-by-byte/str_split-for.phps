<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

$array = str_split($str);

for ($i = 0; $i < N; ++$i) {
    for ($j = 0, $c = count($array); $j < $c; ++$j) {
        dummy($array[$j]);
    }
}

var_dump($start + microtime(true));
