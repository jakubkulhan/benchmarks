<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: call_user_func(array($object, $method)) vs. $object->$method()
-------------------------------------------------------------------------
<?php
echo "call_user_func:  ";
require_once dirname(__FILE__) . '/call_user_func.phps';

echo "dynamic method call: ";
require_once dirname(__FILE__) . '/dynamic.phps';
