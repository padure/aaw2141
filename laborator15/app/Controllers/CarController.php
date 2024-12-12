<?php
    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Controllers\Controller;
    use App\Models\Car;

    class CarController extends Controller
    {
        public function index(Request $request, Response $response)
        {
            $cars = Car::all();
            $response->getBody()->write($this->view('index.view.php', [
                'cars' => $cars
            ]));
            return $response;
        }
    }