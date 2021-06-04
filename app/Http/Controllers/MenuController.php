<?php

namespace App\Http\Controllers;

use App\Models\Serving;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $servings = Serving::all();
        
        return view(
            'menu',
            [
                "servings" => $servings,
            ]
        );
    }
}
