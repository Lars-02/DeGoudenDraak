<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());
        return redirect(route('category.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Application|Factory|View|Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact(['category']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryRequest $request
     * @param Category $category
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('category.index'));
    }
}
