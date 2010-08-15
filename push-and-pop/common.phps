<?php
define('N', 1000);

class SimpleStack
{
    private $s = array();
    private $sp = -1;

    function push($x)
    {
        $this->s[++$this->sp] = $x;
    }

    function pop()
    {
        if ($this->sp < 0) {
            return NULL;
        }

        $ret = $this->s[$this->sp];
        unset($this->s[$this->sp--]);
        return $ret;
    }
}

$reference_stack = array();
for ($i = 0; $i < N; ++$i) {
    $reference_stack[] = $i;
}
