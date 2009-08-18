<?php
define('TEST_FILE', 'file');
define('RECORD_SIZE', 256);
define('OFFSET', 248);
define('READ_SIZE', 8);
define('SIZE', 64 * 1024 * 1024);
if (!($handle = fopen(TEST_FILE, 'wb+'))) {
    die("cannot open file");
}

if (fseek($handle, SIZE, SEEK_SET) === -1) {
    die("cannot seek");
}

function dummy($data)
{
    return ;
}
