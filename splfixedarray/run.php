<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: array vs. SplFixedArray
----------------------------------
<?php
echo "array:         ";
require_once dirname(__FILE__) . '/array.phps';

echo "SplFixedArray: ";
require_once dirname(__FILE__) . '/splfixedarray.phps';
