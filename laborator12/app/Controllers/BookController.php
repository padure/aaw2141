<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Book;

class BookController
{
    public function index(Request $request, Response $response, $args)
    {
        $books = Book::all();
        ob_start();
        require '../views/index.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response, $args)
    {
        ob_start();
        require '../views/create.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $book = $request->getParsedBody();
        Book::create($book);
        return $response
            ->withHeader('Location', '/books')
            ->withStatus(302);
    }

    public function edit(Request $request, Response $response, $args)
    {
        $book = Book::find($args['id']);
        ob_start();
        require '../views/edit.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }

    public function update(Request $request, Response $response, $args)
    {
        $data = $request->getParsedBody();
        $book = Book::find($args['id']);
        $book->fill($data);
        $book->save();
        return $response
            ->withHeader('Location', '/books')
            ->withStatus(302);
    }

    public function delete(Request $request, Response $response, $args)
    {   
        $book = Book::find($args['id']);
        $book->delete();
        return $response
            ->withHeader('Location', '/books')
            ->withStatus(302);
    }
    
    public function show(Request $request, Response $response, $args)
    {
        $book = Book::find($args['id']);
        ob_start();
        require '../views/show.view.php';
        $html = ob_get_clean();
        $response->getBody()->write($html);
        return $response;
    }
}
