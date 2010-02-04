<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    echo STR;
}

echo "\n";
var_dump($start + microtime(true));
