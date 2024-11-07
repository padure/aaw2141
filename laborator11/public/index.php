<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    require_once __DIR__ . "/../vendor/autoload.php";
    require_once __DIR__ . "/../config/database.php";
    $app = AppFactory::create();
    //Middleware

    //Routes
    require_once __DIR__ . "/../routes/web.php";
    $app->run();
