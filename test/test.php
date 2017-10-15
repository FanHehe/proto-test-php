<?php
    // const ROOT = realpath('..');
    define('ROOT', realpath(__DIR__.'/../'));
    require_once ROOT . '/vendor/autoload.php';
    require_once ROOT . '/lib/hehe.pb.php';

    $c = new Fanhehe\Hehe\Test();
    var_dump($c);

