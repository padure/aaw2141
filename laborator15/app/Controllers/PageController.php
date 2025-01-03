<?php
    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Controllers\Controller;
    use App\Models\Car;

    class PageController extends Controller
    {
        public function index(Request $request, Response $response)
        {
            $response->getBody()->write($this->view('home.view.php'));
            return $response;
        }
    }