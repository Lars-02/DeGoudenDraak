<?php

namespace App\Http\Controllers;

use App\Http\Requests\TabletLoginRequest;
use App\Models\Allergen;
use Illuminate\Http\Request;


class TabletController extends Controller
{
    public function login(TabletLoginRequest $request)
    {
        return view('tablet.menu');
    }
}
