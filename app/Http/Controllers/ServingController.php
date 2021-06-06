<?php

namespace App\Http\Controllers;

use App\Models\Serving;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ServingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $search = request()->query('q');
        $servings = $this->searchDishes($search);

        return view(
            'menu.index',
            [
                "servings" => $servings,
                "query" => $search,
            ]
        );
    }

    private function searchDishes($search)
    {
        if ($search)
            return Serving::where('name', 'LIKE', '%' . $search . '%')->get();
        return Serving::query()->orderBy("name")->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Serving $serving
     * @return Application|Factory|View|Response
     */
    public function show(Serving $serving)
    {
        return view(
            'menu.details',
            [
                "serving" => $serving,
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Serving $serving
     * @return Response
     */
    public function edit(Serving $serving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Serving $serving
     * @return Response
     */
    public function update(Request $request, Serving $serving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Serving $serving
     * @return Response
     */
    public function destroy(Serving $serving)
    {
        //
    }
}
