<?php
    use App\Controllers\CarController;

    $app->get('/cars', [CarController::class, 'index']);