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
    }