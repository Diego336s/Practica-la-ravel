<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistroRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.form');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(RegistroRequest $request): RedirectResponse
    {


        $user = User::create([
            "nombre" => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "name" => $request->input('name'),
            "email" => $request->input('email'),
            "documento" => $request->input('documento'),
            "password" => Hash::make($request->input('password'))

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home'));
    }
}
