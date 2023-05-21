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
}
