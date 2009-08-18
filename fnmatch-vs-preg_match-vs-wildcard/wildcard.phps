<?php
require_once 'common.phps';

function wildcard($pattern, $string)
{
    $pos = strpos($pattern, '*');

    if ($pos === FALSE) {
        return $string === $pattern;
    } else if (substr_count($pattern, '*') === 1) {
        if ($pos === 0) {
            return substr($pattern, 1) === substr($string, -(strlen($pattern) - 1));
        } else if ($pos === strlen($pattern) - 1) {
            return strncmp($pattern, $string, strlen($pattern) - 1) === 0;
        }
    }

    return preg_match(
        '~' . str_replace('\*', '.+', preg_quote($pattern)) . '~',
        $string);
}

$start = -microtime(true);

for ($i = 0; $i < N; $i++) {
    wildcard(TEST_PATTERN, TEST_STRING);
}

echo 'wildcard:   ';
var_dump(microtime(true) + $start);
