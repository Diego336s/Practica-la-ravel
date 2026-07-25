@extends('layouts.app')

@section('contenido')
    <div class="container">
        <h1>Bienvenido al sistema </h1>
        @if (Auth::check(Auth::User()))
            <h3>{{ Auth::user()->nombre }}</h3>
        @endif


        <p>Esta es la página principal.</p>
    </div>
@endsection
