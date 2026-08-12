@extends('layouts.app')

@section('contenido')
    <div class='container'>
        <h1>Productos</h1>

        <div class="text-lg-end">

            <a name="" id="" class="btn btn-primary" href="{{ route('productos.create') }}" role="button"><i
                    class="bi bi-database-add"></i> Crear producto</a>

        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('success') }}
            </div>
        @endif


        <div class="table-responsive mt-2">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th class='' scope="col">ID</th>
                        <th class='' scope="col">Producto</th>
                        <th class='' scope="col">Descripcion</th>
                        <th class='' scope="col">Precio</th>
                        <th class='' scope="col">Stock</th>
                        <th class='' scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($productos as $producto)
                        <tr class="">
                            <td class="">
                                {{ $producto->id }}
                            </td>

                            <td>
                                {{ $producto->nombre }}
                            </td>


                            <td>
                                {{ $producto->descripcion }}
                            </td>

                            <td>
                                {{ $producto->precio }}
                            </td>

                            <td>
                                {{ $producto->stock }}
                            </td>


                            <td>
                                <!-- Modal trigger button -->
                                <button  type="button"
                                    class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId{{ $producto->id }}">
                                    <i class="bi bi-trash3"></i> Elminar
                                </button>

                                <a name="" id="" class="btn btn-primary"
                                    href="{{ route('productos.show', $producto->id) }}" role="button"><i
                                        class="bi bi-search"></i> Buscar</a>

                                <a name="" id="" class="btn btn-primary"
                                    href="{{ route('productos.edit', $producto->id) }}" role="button"><i
                                        class="bi bi-pencil-square"></i> Editar</a>


                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId{{ $producto->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">
                                                    {{ $producto->nombre }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="card-text"><b>Descripcion:</b> {{ $producto->descripcion }}</p>
                                                <p class="card-text"><b>Precio:</b> {{ $producto->precio }}</p>
                                                <p class="card-text"><b>Stock:</b> {{ $producto->stock }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Volver
                                                </button>
                                                <form action="{{ route('productos.destroy', $producto->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button id="btn-" type="submit"
                                                        class="btn btn-danger">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Optional: Place to the bottom of scripts -->
                                <script>
                                    const myModal{{ $producto['id'] }} = new bootstrap.Modal(
                                        document.getElementById("modalId{{ $producto->id }}")
                                    );
                                </script>


                            </td>
                        </tr>
                    @empty

                        <tr>
                            <td class="text-center bg-secondary-subtle"></td>
                            <td class="text-center bg-secondary-subtle"></td>
                            <td class="text-center bg-secondary-subtle">No hay productos disponibles</td>
                            <td class="text-center bg-secondary-subtle"></td>
                            <td class="text-center bg-secondary-subtle"></td>
                            <td class="text-center bg-secondary-subtle"></td>
                        </tr>
                    @endforelse


                </tbody>
            </table>
        </div>
    </div>
@endsection
