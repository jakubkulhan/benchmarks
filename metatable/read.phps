<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

if (!($table = metatable::open(SQUARES_FILE, metatable::READONLY))) {
    die('cannot open metatable');
}

for ($i = N, $ciphres = strlen((string) N); $i > 0; --$i) {
    $k = sprintf('%0' . $ciphres . 'd', $i);
    $got = $table->get($k, 'value');
    assert($got[$k]['value'] === $i * $i);
}


echo 'time: ';
var_dump(microtime(true) + $start);
echo 'mem: ';
var_dump(memory_get_peak_usage());

unset($table);
