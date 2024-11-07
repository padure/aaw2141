<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //Controllers
    use App\Controllers\ProjectController;
    //Index
    $app->get('/', function (Request $request, Response $response, array $args) {
        $response->getBody()->write("Hello!");
        return $response;
    });
    //Project
    $app->get('/projects', [ProjectController::class, 'index']);
    $app->get('/projects/{id}', [ProjectController::class, 'show']);
    $app->post('/projects', [ProjectController::class, 'store']);
    $app->put('/projects/{id}', [ProjectController::class, 'update']);
    $app->delete('/projects/{id}', [ProjectController::class, 'delete']);