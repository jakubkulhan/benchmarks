<?php
require_once 'common.phps';

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    fnmatch(TEST_PATTERN, TEST_STRING);
}

echo 'fnmatch:    ';
var_dump(microtime(true) + $start);
