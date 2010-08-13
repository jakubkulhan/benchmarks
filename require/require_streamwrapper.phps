<?php
require_once dirname(__FILE__) . '/common.phps';

$file = Wrapper::PROTOCOL . '://' . FILE;

$start = -microtime(true);
for ($i = 0; $i < N; ++$i) {
    require $file;
}
var_dump(microtime(true) + $start);
