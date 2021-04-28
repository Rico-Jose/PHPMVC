<?php

/* 
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
exit;
 */

require_once __DIR__.'/../vendor/autoload.php';
use app\core\Application;

echo '<pre>';
var_dump(__DIR__.'/../vendor/autoload.php');
echo '</pre>';
exit;
$app = new Application();

$app->router->get('/', function()
{
    return 'Hello World';
});

$app->router->get('/contact', function()
{
    return 'Contact';
});

$app->run();