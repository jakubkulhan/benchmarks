<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

if (!($btree = btree::open(SQUARES_FILE))) {
    die('cannot open btree');
}

for ($i = N, $ciphres = strlen((string) N) + 1; $i > 0; --$i) {
    assert($btree->get(sprintf('%0' . $ciphres . 'd', $i)) === $i * $i);
}

echo 'time: ';
var_dump(microtime(true) + $start);
echo 'mem: ';
var_dump(memory_get_peak_usage());
echo 'btree size: ';
var_dump(filesize(SQUARES_FILE));

unset($btree);
