@extends('layouts.app')

@section('contenido')
    <div class="container">
        @vite(['resources/css/usuarios/index.css'])
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h1 class='mt-3'>Usuarios del sistema</h1>

    
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif

        <div class="row">
            @forelse ($users as $user)
                <div class="col-md-3 mt-5">
                    <div class="card btn btn-outline-secondary" style="width: 18rem;">
                        <div class="card-body ">
                            <h5 class="card-title">Usuario {{ $loop->iteration }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Nombre</h6>
                            <p>{{ $user->nombre }}</p>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Apellido</h6>
                            <p>{{ $user->apellido }}</p>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Documento</h6>
                            <p>{{ $user->documento }}</p>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Correo</h6>
                            <p>{{ $user->email }}</p>
                          
                        </div>
                    </div>
                </div>
                
            @empty
                <div class='text-lg-center'>
                    <h2>No hay usuarios registrados</h2>
                </div>
            @endforelse



        </div>
    </div>
@endsection
