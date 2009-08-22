<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once dirname(__FILE__) . '/common.phps';
?>

Benchmark: test metatable reading and writing
---------------------------------------------

Writing and reading <?php echo N; ?> integral values

<?php
echo "write: \n";
require_once dirname(__FILE__) . '/write.phps';
echo "\n";

echo "read: \n";
require_once dirname(__FILE__) . '/read.phps';
echo "\n";

echo "read sequential: \n";
require_once dirname(__FILE__) . '/read_seq.phps';
echo "\n";

@unlink(SQUARES_FILE);

?>
Reading <?php echo N; ?> values of <?php echo strlen(LONG_STRING); ?> bytes long strings

<?php

echo "read_strings: \n";
require_once dirname(__FILE__) . '/read_strings.phps';
echo "\n";
@unlink(STRINGS_FILE);

echo "read_strings sequential: \n";
require_once dirname(__FILE__) . '/read_strings_seq.phps';
echo "\n";
@unlink(STRINGS_FILE);
