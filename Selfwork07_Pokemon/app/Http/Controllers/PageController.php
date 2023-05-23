<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index() {
        $pokemons = Http::get('https://pokeapi.co/api/v2/pokemon')->json();
        foreach ($pokemons['results'] as $pokemon) {
            $id = Str::afterLast($pokemon['url'], 'https://pokeapi.co/api/v2/pokemon/');
            $data[] = [
                'name' => $pokemon['name'],
                'id' => (int)$id
            ];
        }

        return view('pokemon.index', ['pokemons' => $pokemons], ['pokemon' => $data]);
    }

    public function show($id) {
        $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon/' . $id)->json();

        return view('pokemon.show', ['pokemon' => $pokemon]);
    }
}
