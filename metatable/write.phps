<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

if (!($table = metatable::open(SQUARES_FILE))) {
    die('cannot open metatable');
}

for ($i = N, $ciphres = strlen((string) N); $i > 0; --$i) {
    $table->set(sprintf('%0' . $ciphres . 'd', $i), 'value', $i * $i);
}

echo 'ok: ';
var_dump($table->close());
echo 'time: ';
var_dump(microtime(true) + $start);
echo 'mem: ';
var_dump(memory_get_peak_usage());
