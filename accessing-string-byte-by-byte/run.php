<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: accessing string byte by byte
----------------------------------------
<?php
echo "[]:                         ";
require_once dirname(__FILE__) . '/brackets.phps';

echo "{}:                         ";
require_once dirname(__FILE__) . '/braces.phps';

echo "substr():                   ";
require_once dirname(__FILE__) . '/substr.phps';

echo "str_split() + for loop:     ";
require_once dirname(__FILE__) . '/str_split-for.phps';

echo "str_split() + foreach loop: ";
require_once dirname(__FILE__) . '/str_split-foreach.phps';
