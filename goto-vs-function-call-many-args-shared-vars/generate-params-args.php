<?php
$params = array();
$args = array();
$assigns = array();
$pushes = array();
$pops = array();
for ($i = 0; $i < 100; ++$i) {
	$params[] = "\$x$i";
	$args[] = "'$i'";
	$assigns[] = "\$x$i = '$i';";
	if ($i < 20) {
		$pushes[] = "\$_stack[++\$_sp] = \$x$i;";
		$pops[] = "\$x$i = \$_stack[\$_sp--];";
	}
}
echo implode(", ", $params), "\n";
echo implode(" . ", $params), "\n";
echo implode(", ", $args), "\n";
echo implode(" ", $assigns), "\n";
echo implode(" ", $pushes), "\n";
echo implode(" ", array_reverse($pops)), "\n";
