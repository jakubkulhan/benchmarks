<?php
require __DIR__ . "/common.phps";

$assigns = array();
for ($i = 0; $i < N; ++$i) {
	$assigns[] = "\$x$i = $i;";
}

echo implode(" ", $assigns);
