<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function index(Request $request)
    {
        $data = Http::get('www.thecocktaildb.com/api/json/v1/1/search.php?s='. $request->get('q'))->json();
        return view('tablet.cocktail', compact(['data']));
    }
}
