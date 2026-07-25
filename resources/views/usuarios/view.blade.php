@extends('layouts.app')
@section('contenido')
    @vite(['resources/css/usuarios/view.css'])
    <div class="container">
        <div class="contenido">
            <div class="card">
                <div class="card-photo"></div>
                <div class="card-title">{{ $user->nombre }} {{ $user->apellido }}<br>
                    <span>{{ $user->name }}</span>
                </div>
                <div class="card-socials">
                    <div>
                        <p><i class="bi bi-credit-card-2-front"></i> {{ $user->documento }}</p>
                        <p><i class="bi bi-envelope-at-fill"></i> {{ $user->email }}</p>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
