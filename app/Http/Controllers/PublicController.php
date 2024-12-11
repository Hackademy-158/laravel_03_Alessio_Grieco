<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function welcome()
    {
        $animes = Http::get('https://api.jikan.moe/v4/anime')->json('data');
        // dd($animes['data']);
        return view('welcome', ['animes' => $animes]);
    }
    public function detail($id)
    {
        $anime = Http::get('https://api.jikan.moe/v4/anime/'. $id)->json();
        // dd($anime['data']);
        return view('detail', ['anime' => $anime]);
    }
}
