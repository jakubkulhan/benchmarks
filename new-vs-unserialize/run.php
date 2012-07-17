<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: creating object graph using by creating instances vs. unserialize()
------------------------------------------------------------------------------
<?php
echo "new:         ";
require_once dirname(__FILE__) . '/new.phps';

echo "unserialize: ";
require_once dirname(__FILE__) . '/unserialize.phps';
