<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Ability;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class RoleController extends Controller
{
    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(Role::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('role.index', ['roles' => Role::paginate(10)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return Application|Factory|View
     */
    public function edit(Role $role)
    {
        $abilities = Ability::all()->mapWithKeys(function ($item) use ($role) {
            return [$item['id'] => [$role->abilities->contains($item['id']), $item['name']]];
        });
        return view('role.edit', ['role' => $role, 'abilities' => $abilities]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Role $role
     * @return Application|RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, Role $role)
    {
        $validated = $this->validate($request, [
            'abilities' => 'nullable|array',
            'abilities.*' => 'nullable|numeric|distinct|exists:abilities,id',
        ]);
        if (in_array(null, $validated['abilities']))
            $role->abilities()->detach();
        else
            $role->abilities()->sync($validated['abilities']);
        return redirect(route('role.index'));
    }
}
