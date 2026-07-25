@extends('layouts.app')
@section('contenido')
    <div class="container text-lg-center">

        @if (empty($producto))
            <div class="alert alert-secondary mt-2" role="alert">
                <h4 class="alert-heading">Error 404</h4>
                <p>Producto no encontrado</p>
                <hr />
                <p class="mb-0">Por favor volver aproductos</p>
                <br>
                <a name="" id="" class="btn btn-primary" href="{{ route('productos.index') }}"
                    role="button">Volver</a>

            </div>

            </script>
        @else
            @if ($producto->stock < 10)
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <b>Queda poco stock,</b> por favor añadir nuevo stock. <b>Stock actual:</b>
                    {{ $producto->stock }}
                </div>
            @endif
            <div class="card border-primary mt-5">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                        class="bi bi-card-checklist" viewBox="0 0 16 16">
                        <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z" />
                        <path
                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0" />
                    </svg>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $producto->nombre }}</h4>
                    <p class="card-text"><b>Descripcion:</b> {{ $producto->descripcion }}</p>
                    <p class="card-text"><b>Precio:</b> {{ $producto->precio }}</p>
                    <p class="card-text"><b>Stock:</b> {{ $producto->stock }}</p>
                    <a name="" id="" class="btn btn-primary" href="{{ route('productos.index') }}"
                        role="button">Volver</a>
                </div>

            </div>
        @endif
    </div>
@endsection
