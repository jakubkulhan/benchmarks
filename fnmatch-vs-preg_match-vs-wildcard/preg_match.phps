<?php
$start = -microtime(true);

$regex = '~' . str_replace('\*', '.+', preg_quote(TEST_PATTERN)) . '~';

for ($i = 0; $i < N; $i++) {
    preg_match($regex, TEST_STRING);
}

echo 'preg_match: ';
var_dump(microtime(true) + $start);
