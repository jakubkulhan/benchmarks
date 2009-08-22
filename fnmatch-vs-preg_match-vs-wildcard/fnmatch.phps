<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    fnmatch(TEST_PATTERN, TEST_STRING);
}

echo 'fnmatch:    ';
var_dump(microtime(true) + $start);
