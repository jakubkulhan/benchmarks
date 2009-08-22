<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
for ($i = 0, $N = SIZE / RECORD_SIZE; $i < $N; $i++) {
    fseek($handle, RECORD_SIZE * $i + OFFSET, SEEK_SET);
    $data = fread($handle, READ_SIZE);
    dummy($data);
}
var_dump(microtime(true) + $start);
