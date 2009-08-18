<?php
require_once 'common.phps';

$start = -microtime(true);
fseek($handle, 0, SEEK_SET);
for ($i = 0, $N = SIZE / RECORD_SIZE; $i < $N; $i++) {
    $data = fread($handle, READ_SIZE);
    $data = substr($data, OFFSET);
    dummy($data);
}
var_dump(microtime(true) + $start);
