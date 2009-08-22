<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once dirname(__FILE__) . '/common.phps';
?>

Benchmark: read more data than needed vs. seek to them
------------------------------------------------------

Test file -- <?php echo SIZE; ?> bytes.

<?php

echo 'read: ';
require_once dirname(__FILE__) . '/read.phps';

echo 'seek: ';
require_once dirname(__FILE__) . '/seek.phps';

@unlink(TEST_FILE);
