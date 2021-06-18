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
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ServingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        $searchNameQuery = $request->q;
        $servings = $this->searchDishes($searchNameQuery);

        $searchCategoryQuery = $request->category;
        $servings = $this->searchCategory($servings, $searchCategoryQuery);

        $searchIDQuery = $request->dishID;
        $servings = $this->searchID($servings, $searchIDQuery);

        $servings = $servings->values();

        return view('serving.index', compact(['servings', 'searchNameQuery', 'searchCategoryQuery', 'searchIDQuery']));
    }

    private function searchDishes($search)
    {
        if ($search) {
            $servings = Serving::where('name', 'LIKE', '%' . $search . '%')->orderBy("category_id")->get();
        } else {
            $servings = Serving::query()->orderBy("category_id")->get();
        }
        return $servings;
    }

    public function tabletMenu(Request $request)
    {
        $searchNameQuery = $request->q;
        $servings = ServingController::searchDishes($searchNameQuery);

        $searchCategoryQuery = $request->category;
        $servings = $this->searchCategory($servings, $searchCategoryQuery);

        $servings = $servings->values();

        return view('tablet.menu', compact(['servings', 'searchNameQuery', 'searchCategoryQuery']));
    }

    private function searchCategory($servings, $search)
    {
        if ($search) {
            // WHY THIS NO WORK IT WORK AT LINE 44
            return $servings->where('name', 'LIKE', '%' . $search . '%');
        }
        return $servings;
    }

    private function searchID($servings, $search)
    {
        if ($search) {
            $servings = $servings->where('id', '=', $search);
        }
        return $servings;
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
        $hasNone = false;
        foreach($serving->allergens as $allergen) {
            if ($allergen->name == 'None')
                $hasNone = true;
        }
        return view('serving.show', compact('serving', 'hasNone'));
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
            return [$item['id'] => [$serving->category->id === $item['id'], $item['number'] . $item['version'] . ' ' . $item['name']]];
        });
        $offers = Offer::all()->mapWithKeys(function ($item) use ($serving) {
            return [$item['id'] => [$serving->offer->id === $item['id'], $item['price'] . ' euro, ' . $item['start_at'] . ' - ' . $item['ending_at']]];
        });
        $allergens = Allergen::all()->mapWithKeys(function ($item) use ($serving) {
            return [$item['id'] => [$serving->allergens->contains($item['id']), $item['name']]];
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
        return redirect(route('serving.show', $serving));
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
