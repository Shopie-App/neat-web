<?php

use App\Controllers\IndexController;
use Neat\App\AppBuilder;
use App\Startup;

require __DIR__.'/../vendor/autoload.php';

$builder = new AppBuilder();

/**
 * if addEndpoints is used, no need to call useRouting 
 * or useMiddleware
 */
//$builder->useRouting();

$builder->addEndpoints([
    IndexController::class
]);

$app = $builder->build();

/**
 * add custom services
 */
//$app->addCustom(Startup::class);

$app->run();