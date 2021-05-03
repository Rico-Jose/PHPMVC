<?php

require_once __DIR__.'/../vendor/autoload.php';

/* 
echo '<pre>';
var_dump();
echo '</pre>';
exit;
 */

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->run();