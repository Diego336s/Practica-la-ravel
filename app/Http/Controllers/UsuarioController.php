<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\User;


class UsuarioController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view("usuarios.index", compact('users'));
    }

    public function show(int $id)
    {
        $user = User::findOrFail($id);
        
        return view('usuarios.view', compact('user'));
    }


    public function create()
    {
        return view('usuarios.form');
    }

    public function store(UsuarioRequest $request)
    {
        User::create($request->validated());

        return redirect()->route('usuarios.index')->with('success', 'Usuario ' . $request->input('name') . ' creado correctamente.');
    }

    public function destroy(int $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario ' . $user->name . ' eliminado correctamente.');
    }

    public function edit(int $id)
    {
        $user = User::findOrFail($id);

        return view('usuarios.form', compact('user'));
    }

    public function update(int $id, UsuarioRequest $request)
    {
        $user = User::findOrFail($id);
        $user->update($request->validated());

          return redirect()->route('usuarios.index')->with('success', 'Usuario ' . $user->name . ' actualizado correctamente.');
    }
}
