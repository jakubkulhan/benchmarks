<?php
require_once dirname(__FILE__) . '/common.phps';

if (!($btree = btree::open(STRINGS_FILE))) {
    die('cannot open btree');
}

for ($i = N, $ciphres = strlen((string) N) + 1; $i > 0; --$i) {
    $btree->set(sprintf('%0' . $ciphres . 'd', $i), LONG_STRING);
}

$start = -microtime(true);

for ($i = N, $ciphres = strlen((string) N) + 1; $i > 0; --$i) {
    assert($btree->get(sprintf('%0' . $ciphres . 'd', $i)) === LONG_STRING);
}

echo 'time: ';
var_dump(microtime(true) + $start);
echo 'mem: ';
var_dump(memory_get_peak_usage());
echo 'btree size: ';
var_dump(filesize(STRINGS_FILE));

unset($btree);
