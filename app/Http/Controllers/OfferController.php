<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $offers = Offer::all();
        return view('offer.index', compact(['offers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param OfferRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(OfferRequest $request)
    {
        Offer::create($request->validated());
        return redirect(route('offer.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Offer $offer
     * @return Application|Factory|View|Response
     */
    public function edit(Offer $offer)
    {
        return view('offer.edit', compact(['offer']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param OfferRequest $request
     * @param Offer $offer
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function update(OfferRequest $request, Offer $offer)
    {
        $offer->update($request->validated());
        return redirect(route('offer.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Offer $offer
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect(route('offer.index'));
    }
}
