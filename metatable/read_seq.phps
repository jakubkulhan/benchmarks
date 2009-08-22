<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

if (!($table = metatable::open(SQUARES_FILE, metatable::READONLY))) {
    die('cannot open metatable');
}

foreach ($table->get('*', '*') as $k => $v) {
    dummy($k, $v);
}

echo 'time: ';
var_dump(microtime(true) + $start);
echo 'mem: ';
var_dump(memory_get_peak_usage());

unset($table);
