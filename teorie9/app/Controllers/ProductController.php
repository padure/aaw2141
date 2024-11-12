<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Product;

class ProductController
{
    // Listarea tuturor produselor
    public function index(Request $request, Response $response)
    {
        $products = Product::all();
        $response->getBody()->write(json_encode($products));
        return $response->withHeader('Content-Type', 'application/json');
    }

    // Afișarea unui produs specific
    public function show(Request $request, Response $response, $args)
    {
        $product = Product::find($args['id']);
        if (!$product) {
            $response->getBody()->write(json_encode(['error' => 'Produsul nu a fost găsit.']));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }
        $response->getBody()->write(json_encode($product));
        return $response->withHeader('Content-Type', 'application/json');
    }

    // Crearea unui produs nou
    public function create(Request $request, Response $response)
    {
        $data = $request->getParsedBody();
        $product = Product::create($data);
        $response->getBody()->write(json_encode($product));
        return $response->withHeader('Content-Type', 'application/json');
    }

    // Actualizarea unui produs existent
    public function update(Request $request, Response $response, $args)
    {
        $data = json_decode($request->getBody()->getContents(), true);

        // Verificarea dacă datele sunt valide
        if (is_null($data) || !is_array($data)) {
            $response->getBody()->write(json_encode(['error' => 'Date invalide trimise pentru actualizare.']));
            return $response->withStatus(400)->withHeader('Content-Type', 'application/json');
        }

        $product = Product::find($args['id']);
        if (!$product) {
            $response->getBody()->write(json_encode(['error' => 'Produsul nu a fost găsit.']));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $product->fill($data);
        $product->save();

        $response->getBody()->write(json_encode($product));
        return $response->withHeader('Content-Type', 'application/json');
    }

    // Ștergerea unui produs
    public function delete(Request $request, Response $response, $args)
    {
        $product = Product::find($args['id']);
        if (!$product) {
            $response->getBody()->write(json_encode(['error' => 'Produsul nu a fost găsit.']));
            return $response->withStatus(404)->withHeader('Content-Type', 'application/json');
        }

        $product->delete();
        $response->getBody()->write(json_encode(['message' => 'Produs șters cu succes']));
        return $response->withHeader('Content-Type', 'application/json');
    }
}
