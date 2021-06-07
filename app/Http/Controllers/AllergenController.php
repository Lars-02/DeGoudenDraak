<?php

namespace App\Http\Controllers;

use App\Models\Allergen;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class AllergenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $allergens = Allergen::all();
        return view('allergen', compact(['allergens']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(Request $request)
    {
        Allergen::create($request->validate([
            'name' => 'required|string|between:3,32',
        ]));
        return redirect(route('allergen.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Allergen $allergen
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Allergen $allergen)
    {
        $allergen->delete();
        return redirect(route('allergen.index'));
    }
}
