<?php
    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Deployment;

    class DeploymentController
    {   
        public function index(Request $request, Response $response, array $args)
        {
            $deployments = Deployment::with("environment")->get();
            $response->getBody()->write(json_encode($deployments));
            return $response->withHeader('Content-Type', 'application/json');  
        }

        public function store(Request $request, Response $response, array $args)
        {
            $deployment = $request->getParsedBody();
            Deployment::create($deployment);
            $response->getBody()->write(json_encode(['message'=>'Implementare adaugata cu succes!']));
            return $response->withHeader('Content-Type', 'application/json');
        }

        public function show (Request $request, Response $response, array $args) 
        {
            $deployment = Deployment::with("environment")->find($args['id']);
            if(!$deployment){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $response->getBody()->write(json_encode($deployment));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function update (Request $request, Response $response, array $args) 
        {
            $data = json_decode($request->getBody()->getContents(), true);
            $deployment = Deployment::find($args['id']);
            if(!$deployment){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $deployment->fill($data);
            $deployment->save();
            $response->getBody()->write(json_encode(['message'=>'Implementare actualizata!']));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function delete (Request $request, Response $response, array $args) 
        {
            $deployment = Deployment::find($args['id']);
            if(!$deployment){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $deployment->delete();
            $response->getBody()->write(json_encode(['message'=>'Implementare stersa cu succes!']));
            return $response->withHeader('Content-Type', 'application/json');
        }
    }