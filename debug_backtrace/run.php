<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: debug_backtrace()
----------------------------
<?php
echo "first level:     ";
require_once dirname(__FILE__) . '/f1.phps';

echo "tenth level:     ";
require_once dirname(__FILE__) . '/f10.phps';

echo "twentieth level: ";
require_once dirname(__FILE__) . '/f20.phps';
