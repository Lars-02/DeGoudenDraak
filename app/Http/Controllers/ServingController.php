<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServingRequest;
use App\Models\Allergen;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Serving;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

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
            'serving.index',
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
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        $categories = Category::all()->mapWithKeys(function ($item) {
            return [$item['id'] => $item['number'] . $item['version'] . ' ' . $item['name']];
        });
        $offers = Offer::all()->mapWithKeys(function ($item) {
            return [$item['id'] => $item['price'] . ' euro, ' . $item['start_at'] . ' - ' . $item['ending_at']];
        });
        $allergens = Allergen::all()->pluck('name', 'id');
        return view('serving.create', compact(['categories', 'offers', 'allergens']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServingRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(ServingRequest $request)
    {
        $serving = Serving::create($request->validated());
        return redirect(route('serving.show', ["serving" => $serving]));
    }

    /**
     * Display the specified resource.
     *
     * @param Serving $serving
     * @return Application|Factory|View|Response
     */
    public function show(Serving $serving)
    {
        return view('serving.show', ["serving" => $serving]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Serving $serving
     * @return Application|Factory|View|Response
     */
    public function edit(Serving $serving)
    {
        $categories = Category::all()->mapWithKeys(function ($item) use ($serving) {
            return  [$item['id'] => [$serving->category->id === $item['id'], $item['number'] . $item['version'] . ' ' . $item['name']]];
        });
        $offers = Offer::all()->mapWithKeys(function ($item) use ($serving) {
            return  [$item['id'] => [$serving->offer->id === $item['id'], $item['price'] . ' euro, ' . $item['start_at'] . ' - ' . $item['ending_at']]];
        });
        $allergens = Allergen::all()->mapWithKeys(function ($item) use ($serving) {
            return  [$item['id'] => [$serving->allergens->contains($item['id']), $item['name']]];
        });
        return view('serving.edit', compact(['serving', 'categories', 'offers', 'allergens']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServingRequest $request
     * @param Serving $serving
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(ServingRequest $request, Serving $serving)
    {
        $validated = $request->validated();
        $serving->allergens()->sync(empty($validated['allergens']) ? null : $validated['allergens']);
        unset($validated['allergens']);
        $serving->update($validated);
        $serving->save();
        return redirect(route('serving.edit', $serving));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Serving $serving
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Serving $serving)
    {
        $serving->delete();
        return redirect(route('serving.index'));
    }
}
