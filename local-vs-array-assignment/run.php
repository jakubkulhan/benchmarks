<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: local vs. array assignment
-------------------------------------
<?php
echo "local dynamic: ";
require dirname(__FILE__) . '/local-dynamic.phps';

echo "local:         ";
require dirname(__FILE__) . '/local.phps';

echo "array:         ";
require dirname(__FILE__) . '/array.phps';
