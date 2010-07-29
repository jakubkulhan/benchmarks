<?php
require_once dirname(__FILE__) . '/common.phps';

$start = -microtime(true);
for ($i = 0; $i < N; $i++) {
    f10();
}
var_dump(($start + microtime(true)) / N);
