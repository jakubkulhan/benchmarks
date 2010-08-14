<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

$array = str_split($str);

for ($i = 0; $i < N; ++$i) {
    foreach ($array as $j) {
        dummy($j);
    }
}

var_dump($start + microtime(true));
