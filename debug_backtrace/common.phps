<?php
define('N', 10000);

function f1()
{
    $backtrace = debug_backtrace();
}

function f2()
{
    f1();
}

function f3()
{
    f2();
}

function f4()
{
    f3();
}

function f5()
{
    f4();
}

function f6()
{
    f5();
}

function f7()
{
    f6();
}

function f8()
{
    f7();
}

function f9()
{
    f8();
}

function f10()
{
    f9();
}

function f11()
{
    f10();
}

function f12()
{
    f11();
}

function f13()
{
    f12();
}

function f14()
{
    f13();
}

function f15()
{
    f14();
}

function f16()
{
    f15();
}

function f17()
{
    f16();
}

function f18()
{
    f17();
}

function f19()
{
    f18();
}

function f20()
{
    f19();
}
