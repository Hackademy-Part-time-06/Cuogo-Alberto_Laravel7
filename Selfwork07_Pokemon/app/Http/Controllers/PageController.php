<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index() {
        $pokemons = Http::get('https://pokeapi.co/api/v2/pokemon')->json();

        return view('pokemon.index', ['pokemons' => $pokemons]);
    }

    public function show($id) {
        $id_last = basename(parse_url($id, PHP_URL_PATH));
        $pokemon = Http::get('https://pokeapi.co/api/v2/pokemon/' . $id_last)->json();

        return view('pokemon.show', ['pokemon' => $pokemon]);
    }
}
