<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Routing\RouteCollectorProxy;
    use App\Controllers\ProductController;

    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello world!");
        return $response;
    });

    $app->group('/products', function (RouteCollectorProxy $group) {
        $group->get('', [ProductController::class, 'index']);
        $group->post('', [ProductController::class, 'create']);
        $group->get('/{id}', [ProductController::class, 'show']);
        $group->put('/{id}', [ProductController::class, 'update']);
        $group->delete('/{id}', [ProductController::class, 'delete']);
    });