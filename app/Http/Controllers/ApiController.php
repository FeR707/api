<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function inicio()
    {
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/');
        $datos = json_decode($response->getBody()->getContents(), true);

        $personajes = [];
        foreach ($datos['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'especie' => $personaje['species'],
                'origen' => $personaje['origin']['name'],
                'imagen' => $personaje['image'],
                'estatus' => $personaje['status'],
                'genero' => $personaje['gender'],
            ];
        }
        return view('inicio',['personajes' => $personajes]);
    }


    public function detalles($id)
    {
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/'.$id);
        $descripcion = json_decode($response->getBody()->getContents(), true);

        $numero = rand(0, 42);

        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/?page='.$numero);
        $datos = json_decode($response->getBody()->getContents(), true);

        $personajes = [];
        foreach ($datos['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'especie' => $personaje['species'],
                'origen' => $personaje['origin']['name'],
                'imagen' => $personaje['image'],
                'estatus' => $personaje['status'],
                'genero' => $personaje['gender'],
            ];
        }
        return view('personaje',['personaje' => $descripcion, 'personajes' => $personajes]);
    }
}
