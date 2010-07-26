<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
for ($i = 0; $i < N; ++$i) {
    call_user_func(array($object, $method));
}
var_dump(microtime(true) + $start);
