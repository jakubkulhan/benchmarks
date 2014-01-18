<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: function call vs. simulation by goto
-----------------------------------------------
<?php
echo "function call: ";
require_once dirname(__FILE__) . '/function_call.phps';

echo "goto:          ";
require_once dirname(__FILE__) . '/goto.phps';
