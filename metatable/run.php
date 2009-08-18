<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once 'common.phps';
?>

Benchmark: test metatable reading and writing
---------------------------------------------

Writing and reading <?php echo N; ?> integral values

<?php
echo "write: \n";
require_once 'write.phps';
echo "\n";

echo "read: \n";
require_once 'read.phps';
echo "\n";

?>
Reading <?php echo N; ?> values of <?php echo strlen(LONG_STRING); ?> bytes long strings

<?php

echo "read_strings: \n";
require_once 'read_strings.phps';
echo "\n";


@unlink(SQUARES_FILE);
@unlink(STRINGS_FILE);
