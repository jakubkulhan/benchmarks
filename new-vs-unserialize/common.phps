<?php
define('N', 1000);
define('DEPTH_UPTO', 30);

class Foo
{
	public $a, $b, $c, $d, $e;

	public function __construct($a, $b, $c, $d, $e)
	{
		$this->a = $a;
		$this->b = $b;
		$this->c = $c;
		$this->d = $d;

		if (!is_null($e) && !($e instanceof Foo)) {
			throw new Exception('foooooo!!!');
		}

		$this->e = $e;
	}
}

function createTree($depth = 1)
{
	$tree = NULL;

	for ($i = 0; $i < $depth; ++$i) {
		$tree = new Foo('a', 'b', 'c', 'd', $tree);
	}

	return $tree;
}
