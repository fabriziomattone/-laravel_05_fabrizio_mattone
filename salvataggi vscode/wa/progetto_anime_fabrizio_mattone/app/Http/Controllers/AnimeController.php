<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AnimeController extends Controller
{
    public  function homepage() {
        $animes = Http::get('https://api.jikan.moe/v4/anime')->json();

        return view('welcome', ['animes' => $animes['data']]);
    }

    public function show($id){
        $anime = Http::get('https://api.jikan.moe/v4/anime' . '/' . $id)->json();
        return view('show', ['anime' => $anime['data']]);
    }
}
