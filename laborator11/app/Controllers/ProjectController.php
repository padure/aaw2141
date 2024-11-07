<?php
    namespace App\Controllers;

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use App\Models\Project;

    class ProjectController
    {
        public function index(Request $request, Response $response, array $args)
        {
            $projects = Project::all();
            $response->getBody()->write(json_encode($projects));
            return $response->withHeader('Content-Type', 'application/json');  
        }

        public function store(Request $request, Response $response, array $args)
        {
            $project = $request->getParsedBody();
            Project::create($project);
            $response->getBody()->write(json_encode(['message'=>'Proiect adaugat cu succes!']));
            return $response->withHeader('Content-Type', 'application/json');
        }

        public function show (Request $request, Response $response, array $args) 
        {
            $project = Project::find($args['id']);
            if(!$project){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $response->getBody()->write(json_encode($project));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function update (Request $request, Response $response, array $args) 
        {
            $data = json_decode($request->getBody()->getContents(), true);
            $project = Project::find($args['id']);
            if(!$project){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $project->fill($data);
            $project->save();
            $response->getBody()->write(json_encode(['message'=>'Proiect actualizat!']));
            return $response->withHeader('Content-Type', 'application/json');
        }
        
        public function delete (Request $request, Response $response, array $args) 
        {
            $project = Project::find($args['id']);
            if(!$project){
                $response->getBody()->write(json_encode(['message'=>'Nu exista date!']));
                return $response->withHeader('Content-Type', 'application/json');
            }
            $project->delete();
            $response->getBody()->write(json_encode(['message'=>'Proiect sters cu succes!']));
            return $response->withHeader('Content-Type', 'application/json');
        }
    }