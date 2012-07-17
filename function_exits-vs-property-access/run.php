<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: function_exists() vs. property access
------------------------------------------------
<?php
echo "function does not exist:\n";
echo "  function_exists(): ";
require dirname(__FILE__) . '/function_exists.phps';

echo "  property access:   ";
require dirname(__FILE__) . '/property-access.phps';

function foo() {}

echo "function exists:\n";
echo "  function_exists(): ";
require dirname(__FILE__) . '/function_exists.phps';

echo "  property access:   ";
require dirname(__FILE__) . '/property-access.phps';
