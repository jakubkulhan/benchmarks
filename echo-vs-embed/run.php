<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: echoing string vs. embedded string
---------------------------------------------
<?php
echo "echo:  ";
require_once dirname(__FILE__) . '/echo.phps';

echo "embed: ";
require_once dirname(__FILE__) . '/embed.phps';
