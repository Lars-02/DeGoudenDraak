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

    public function tabletMenu(Request $request)
    {
        $searchNameQuery = $request->q;
        $servings = $this->searchDishes($searchNameQuery);

        $searchCategoryQuery = $request->category;
        $servings = $this->searchCategory($servings, $searchCategoryQuery);

        $servings = $servings->values();

        return view('tablet.menu', compact(['servings', 'searchNameQuery', 'searchCategoryQuery']));
    }
}
