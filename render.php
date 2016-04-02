<?php

require __DIR__.'/vendor/autoload.php';

/*
 * Basic Twig setup, that will be modified by future steps
 */
$loader = new \Twig_Loader_Filesystem([
    __DIR__
]);
$twig = new \Twig_Environment($loader, [
    'debug' => true,
    'strict_variables' => true
]);
$twig->addExtension(new \Twig_Extension_Debug());

try {
    $output = $twig->render('fallCollection.twig');
} catch (\Twig_Error_Syntax $e) {
    // this tells the grader that there was an error
    $_ENV['language_error'] = true;

    $output = 'Syntax in your Twig code: '.$e->getMessage();
} catch (\Twig_Error_Runtime $e) {
    // this tells the grader that there was an error
    $_ENV['language_error'] = true;

    $output = 'Runtime error in your Twig code: '.$e->getMessage();
}

echo $output;
