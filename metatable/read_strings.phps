<?php
require_once 'common.phps';

if (!($table = metatable::open(STRINGS_FILE))) {
    die('cannot open metatable');
}

for ($i = 0; $i < N; $i++) {
    $table->set((string) $i, 'value', LONG_STRING);
}

if (!$table->close()) {
    die('cannot write metatable');
}

$start = -microtime(true);

if (!($table = metatable::open(STRINGS_FILE))) {
    die('cannot open metatable');
}

foreach ($table->get('*', '*') as $k => $v) {
    dummy($k, $v);
}

echo 'time: ';
var_dump(microtime(true) + $start);
echo 'mem: ';
var_dump(memory_get_peak_usage());
