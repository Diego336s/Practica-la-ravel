@extends('layouts.app')
@section('contenido')
    @vite(['resources/css/usuarios/form.css'])

    <div class="container">
        <div class="row">

            <div class="d-flex justify-content-center align-items-center py-5">

                <form action="{{ isset($user) ? route('usuarios.update', $user->id) : route('usuarios.store') }}"
                    method="POST" class="form">
                    @if (isset($user))
                     <h2 class="heading">actualizacion del Usuario</h2>
                     @method('PUT')
                    @else
                        <h2 class="heading">Registro del Usuario</h2>
                    @endif
                    @csrf
                    <div class="div-input">
                        <input name='nombre' class="input" type="text" placeholder="Nombre"
                            value="{{ old('nombre', $user->nombre ?? '') }}" required>
                    </div>

                    <div class="div-input">
                        <input name='apellido' class="input" type="text" placeholder="Apellido"
                            value="{{ old('apellido', $user->apellido ?? '') }}" required>
                    </div>

                    <div class="div-input">
                        <input name='documento' class="input" type="number" placeholder="Documento"
                            value="{{ old('documento', $user->documento ?? '') }}" required>
                    </div>

                    <div class="div-input">
                        <input name='name' class="input" type="text" placeholder="Nombre de usuario"
                            value="{{ old('name', $user->name ?? '') }}" required>
                    </div>

                    <div class="div-input">
                        <input name='email' class="input" type="email" placeholder="Correo electrónico"
                            value="{{ old('email', $user->email ?? '') }}" required>
                    </div>
                    @if (!isset($user))
                        <div class="div-input">
                            <input name='password' class="input" type="password" placeholder="Contraseña"
                                value="{{ old('password') }}" required>
                        </div>
                    @endif


                    <button type="submit" class="btn">
                      {{ isset($user) ? 'Actualizar' : 'Registrar' }}  
                    </button>

                </form>

            </div>
        </div>

    </div>
@endsection
