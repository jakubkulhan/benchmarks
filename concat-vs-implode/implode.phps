<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);

$str = array();
for ($i = 0; $i < N; $i++) {
    $str[] = str_repeat('-', LEN);
}
$str = implode('', $str);

var_dump($start + microtime(true));
