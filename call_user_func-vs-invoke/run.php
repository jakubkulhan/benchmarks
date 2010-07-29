<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: call_user_func(array($object, '__invoke')) vs. $object()
-------------------------------------------------------------------
<?php
echo "call_user_func: ";
require_once dirname(__FILE__) . '/call_user_func.phps';

echo "invoke:         ";
require_once dirname(__FILE__) . '/invoke.phps';
