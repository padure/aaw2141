<?php
    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Environment;

    class EnvironmentController
    {   
        public function index(Request $request, Response $response, array $args)
        {
            $environments = Environment::all();
            $response->getBody()->write(json_encode($environments));
            return $response->withHeader('Content-Type', 'application/json');  
        }

        public function store(Request $request, Response $response, array $args)
        {
            $environment = $request->getParsedBody();
            Environment::create($environment);
            $response->getBody()->write(json_encode(['message'=>'Mediu adaugat cu succes!']));
            return $response->withHeader('Content-Type', 'application/json');
        }

        public function show (Request $request, Response $response, array $args) 
        {
            $environment = Environment::find($args['id']);
            if(!$environment){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $response->getBody()->write(json_encode($environment));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function update (Request $request, Response $response, array $args) 
        {
            $data = json_decode($request->getBody()->getContents(), true);
            $environment = Environment::find($args['id']);
            if(!$environment){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $environment->fill($data);
            $environment->save();
            $response->getBody()->write(json_encode(['message'=>'Mediu actualizat!']));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function delete (Request $request, Response $response, array $args) 
        {
            $environment = Environment::find($args['id']);
            if(!$environment){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $environment->delete();
            $response->getBody()->write(json_encode(['message'=>'Mediu sters cu succes!']));
            return $response->withHeader('Content-Type', 'application/json');
        }
    }