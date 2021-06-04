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
            'menu.index',
            [
                "servings" => $servings,
            ]
        );
    }

    public function details($servingID)
    {
        $serving = Serving::find($servingID);

        return view(
            'menu.details',
            [
                "serving" => $serving,
            ]
        );
    }
}
