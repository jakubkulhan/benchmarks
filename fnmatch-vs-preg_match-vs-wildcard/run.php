<?php
header('Content-Type: text/plain; charset=UTF-8');
require_once dirname(__FILE__) . '/common.phps';
?>

Benchmark: fnmatch() vs. preg_match() vs. wildcard()
----------------------------------------------------

<?php
require_once dirname(__FILE__) . '/fnmatch.phps';
require_once dirname(__FILE__) . '/preg_match.phps';
require_once dirname(__FILE__) . '/wildcard.phps';
