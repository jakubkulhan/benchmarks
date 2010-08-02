<?php
require_once dirname(__FILE__) . '/common.phps';

$array = str_split($str);

$start = -microtime(true);

for ($i = 0; $i < N; ++$i) {
    foreach ($array as $j) {
        dummy($j);
    }
}

var_dump($start + microtime(true));
