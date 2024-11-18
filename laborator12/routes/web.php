<?php
    use App\Controllers\BookController;

    $app->redirect('/', '/books');
    $app->get('/books', [BookController::class, 'index']);
    $app->get('/create', [BookController::class, 'create']);
    $app->post('/store', [BookController::class, 'store']);
    $app->get('/edit/{id}', [BookController::class, 'edit']);
    $app->put('/update/{id}', [BookController::class, 'update']);
    $app->delete('/delete/{id}', [BookController::class, 'delete']);
    $app->get('/show/{id}', [BookController::class, 'show']);