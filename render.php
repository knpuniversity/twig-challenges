<?php

require __DIR__.'/vendor/autoload.php';

/*
 * Basic Twig setup, that will be modified by future steps
 */
$loader = new \Twig_Loader_Filesystem([
    __DIR__
]);
$twig = new \Twig_Environment($loader, [
    'debug' => true
]);
