<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Event;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{

    /**
     * Create the controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authorizeResource(User::class);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('user.index', ['users' => User::paginate(10)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Application|Factory|View
     */
    public function edit(User $user)
    {
        $roles = Role::all()->mapWithKeys(function ($item) use ($user) {
            return [$item['id'] => [$user->roles->contains($item['id']), $item['name']]];
        });
        return view('user.edit', ['user' => $user, 'roles' => $roles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $user
     * @return Application|Redirector|RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        if (in_array(null, $request->get('roles')))
            $user->roles()->detach();
        else
            $user->roles()->sync($request->get('roles'));
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'));
    }
}
