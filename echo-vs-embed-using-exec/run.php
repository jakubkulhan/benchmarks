<?php
require_once dirname(__FILE__) . '/common.phps';
header('Content-Type: text/plain; charset=UTF-8');
?>

Benchmark: echoing string vs. embedded string
---------------------------------------------
<?php
echo "echo:  ";
echo exec('php -f "' . dirname(__FILE__) . '/echo.phps"');
echo "\n";

echo "embed: ";
echo exec('php -f "' . dirname(__FILE__) . '/embed.phps"');
echo "\n";
