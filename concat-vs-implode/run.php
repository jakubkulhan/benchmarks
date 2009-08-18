<?php
require_once 'common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: string concatenation vs. implode()
---------------------------------------------
<?php
echo "concat:  ";
require_once 'concat.phps';

echo "implode: ";
require_once 'implode.phps';
