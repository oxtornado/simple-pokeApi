<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokeController extends Controller
{
    public function getPokemon($name)
    {
        $client = new Client();
        $url = "https://pokeapi.co/api/v2/pokemon/{$name}";

        try {
            $response = $client->get($url);
            $pokemon = json_decode($response->getBody(), true);

            return view('pokemon', ['pokemon' => $pokemon]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Pokemon not found'], 404);
        }
    }
}