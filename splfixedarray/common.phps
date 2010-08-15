<?php
define('N', 1000);

$array = range(0, N - 1);
$splfixedarray = SplFixedArray::fromArray($array);
