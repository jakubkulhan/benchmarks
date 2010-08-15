<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: push and pop
-----------------------
<?php
echo "array_push:        ";
require dirname(__FILE__) . '/array_push.phps';

echo "[] push:           ";
require dirname(__FILE__) . '/brackets_push.phps';

echo "sp push:           ";
require dirname(__FILE__) . '/sp_push.phps';

echo "SplStack::push:    ";
require dirname(__FILE__) . '/splstack_push.phps';

echo "SimpleStack::push: ";
require dirname(__FILE__) . '/simple_push.phps';

echo "array_pop:         ";
require dirname(__FILE__) . '/array_pop.phps';

echo "[] pop:            ";
require dirname(__FILE__) . '/brackets_pop.phps';

echo "sp pop:            ";
require dirname(__FILE__) . '/sp_pop.phps';

echo "SplStack::pop:     ";
require dirname(__FILE__) . '/splstack_pop.phps';

echo "SimpleStack::pop:  ";
require dirname(__FILE__) . '/simple_pop.phps';

echo "array_splice pop:  ";
require dirname(__FILE__) . '/array_splice.phps';

echo "array_slice pop:   ";
require dirname(__FILE__) . '/array_slice.phps';
