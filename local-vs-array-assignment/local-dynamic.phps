<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    ${$i} = $i;
}

var_dump($start + microtime(true));
