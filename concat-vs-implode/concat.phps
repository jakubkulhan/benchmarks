<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

$str = '';
for ($i = 0; $i < N; $i++) {
    $str .= str_repeat('-', LEN);
}

var_dump($start + microtime(true));
