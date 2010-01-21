<?php
require_once dirname(__FILE__) . '/common.phps';

ob_start();

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    echo STR;
}

ob_end_clean();

var_dump($start + microtime(true));
