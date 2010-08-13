<?php
define('N', 10000);
define('FILE', dirname(__FILE__) . '/required.phps');

class Wrapper
{
    const PROTOCOL = 'wrapper';

    private $buffer = '';

    function stream_open($path, $mode, $options, $opened_path)
    {
        if (strncmp($path, self::PROTOCOL . '://', strlen(self::PROTOCOL . '://')) !== 0) {
            return FALSE;
        }

        $path = substr($path, strlen(self::PROTOCOL) + 3);

        if (($this->buffer = file_get_contents($path)) === FALSE) {
            return FALSE;
        }

        return TRUE;
    }

    function stream_stat()
    {
        return FALSE;
    }

    function stream_read($n)
    {
        $ret = (string) substr($this->buffer, 0, $n);
        $this->buffer = (string) substr($this->buffer, $n);
        return $ret;
    }

    function stream_eof()
    {
        return strlen($this->buffer) === 0;
    }
}

stream_wrapper_register(Wrapper::PROTOCOL, 'Wrapper');
