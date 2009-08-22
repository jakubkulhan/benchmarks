<?php
foreach (glob(dirname(__FILE__) . '/*', GLOB_ONLYDIR) as $_) {
    $pid = pcntl_fork();
    if ($pid === 0) {
        require_once $_ . '/run.php';
        exit(0);
    }
    while(pcntl_wait($status) > 0) ; // wait for child
}
