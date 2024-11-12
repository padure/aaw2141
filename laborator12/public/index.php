<?php
    use Slim\Factory\AppFactory;

    require_once __DIR__ . '/../vendor/autoload.php';
    
    $app = AppFactory::create();

    require_once __DIR__ . '/../config/database.php';
    require_once __DIR__ . '/../routes/web.php';
    
    $app->run();