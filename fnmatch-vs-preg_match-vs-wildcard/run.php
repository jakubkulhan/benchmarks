<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once 'common.phps';
?>

Benchmark: fnmatch() vs. preg_match() vs. wildcard()
----------------------------------------------------

<?php
require_once 'fnmatch.phps';
require_once 'preg_match.phps';
require_once 'wildcard.phps';
