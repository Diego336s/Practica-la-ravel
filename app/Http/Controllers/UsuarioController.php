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



   
}
