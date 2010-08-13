<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: require -- streamwrapper overhead
--------------------------------------------
<?php
echo "require:                    ";
require_once dirname(__FILE__) . '/require.phps';

echo "require with streamwrapper: ";
require_once dirname(__FILE__) . '/require_streamwrapper.phps';
