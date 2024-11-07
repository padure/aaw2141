<?php

    use App\Controllers\ProjectController;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    $app->get('/', function (Request $request, Response $response, array $args) {
        $response->getBody()->write("Hello!");
        return $response;
    });
    
    $app->get('/projects', [ProjectController::class, 'index']);
    $app->post('/projects', [ProjectController::class, 'store']);