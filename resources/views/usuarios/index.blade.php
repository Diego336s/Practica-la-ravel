@extends('layouts.app')

@section('contenido')
    <div class="container">
        @vite(['resources/css/usuarios/index.css', 'resources/js/usuarios/index.js'])
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <h1 class='mt-3'>Usuarios del sistema</h1>

        <div class="text-lg-end">
            <a href="{{ route('usuarios.create') }}" type="button" class="btn btn-primary">
                <i class="bi bi-database-add"></i> Usuario
            </a>
        </div>
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
                            <div class="row">
                                <div class="col-4">
                                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button id='btn-eliminar' type="button" class="btn btn-danger btn-eliminar"><i
                                                class="bi bi-trash3"></i></button>
                                    </form>
                                </div>
                                <div class="col-4">
                                     <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                </div>
                                <div class="col-4">
                                      <a href="{{ route('usuarios.show', $user->id) }}" class="btn btn-success"><i class="bi bi-view-list"></i></a>
                                </div>

                               
                              
                            </div>
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
