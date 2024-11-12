<?php
    use App\Controllers\BookController;

    $app->redirect('/', '/books');
    $app->get('/books', [BookController::class, 'index']);
    