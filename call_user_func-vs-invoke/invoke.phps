<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
for ($i = 0; $i < N; ++$i) {
    $object();
}
var_dump(microtime(true) + $start);
