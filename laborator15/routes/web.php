<?php
    use App\Controllers\CarController;
    use App\Controllers\PageController;

    $app->get('/', [PageController::class, 'index']);
    $app->get('/cars', [CarController::class, 'index']);
    