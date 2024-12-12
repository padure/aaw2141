<?php
    use App\Controllers\EventController;

    $app->get('/', [EventController::class, 'index']);