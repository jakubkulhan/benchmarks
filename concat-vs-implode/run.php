<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: string concatenation vs. implode()
---------------------------------------------
<?php
echo "concat:  ";
require_once dirname(__FILE__) . '/concat.phps';

echo "implode: ";
require_once dirname(__FILE__) . '/implode.phps';
