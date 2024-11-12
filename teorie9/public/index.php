<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    use Slim\Factory\AppFactory;
    use Illuminate\Database\Capsule\Manager as Capsule;
    use App\Middleware\AppMiddleware;

    $capsule = new Capsule;
    $capsule->addConnection(require __DIR__ . '/../config/database.php');
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    $app = AppFactory::create();
    //Middleware
    $app->addRoutingMiddleware();
    $appMiddleware = new AppMiddleware($app);
    $appMiddleware->addErrorHandling();
    //Route
    require __DIR__ . '/../routes/web.php';

    $app->run();