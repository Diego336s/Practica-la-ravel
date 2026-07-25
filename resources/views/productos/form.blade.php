@extends('layouts.app')
@section('contenido')
    <div class="container">
        <div class="row">


            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="mb-3">

                    <form
                        action="{{ isset($producto) ? route('productos.update', $producto->id) : route('productos.store') }}"
                        method="POST">
                        @if (isset($producto))
                            <h2 for="" class="form-label mb-3">| Actualizacion del producto</h2>
                            @method('PUT')
                        @else
                            <h2 for="" class="form-label mb-3">| Creacion del producto</h2>
                        @endif
                        @csrf

                        <div class="col-8">
                            <input type="text"
                                class="form-control form-control-sm  @error('nombre') is-invalid @enderror" name="nombre"
                                id="nombre" aria-describedby="helpId" placeholder="Nombre del producto"
                                value="{{ old('nombre', $producto->nombre ?? '') }}" required />
                            <small id="helpId" class="form-text text-body-secondary">Ingrese el nombre del
                                producto</small>
                            @error('nombre')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="col-8">
                            <input type="text"
                                class="form-control form-control-sm  @error('descripcion') is-invalid @enderror"
                                name="descripcion" id="descripcion" aria-describedby="helpId"
                                placeholder="Descripcion del producto"
                                value="{{ old('descripcion', $producto->descripcion ?? '') }}" required />
                            <small id="helpId" class="form-text text-body-secondary">Ingrese la descripcion del
                                producto</small>
                            @error('descripcion')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="col-8">
                            <input type="number"
                                class="form-control form-control-sm  @error('precio') is-invalid @enderror" name="precio"
                                id="precio" aria-describedby="helpId" placeholder="Precio del producto"
                                value="{{ old('precio', $producto->precio ?? '') }}" required />
                            <small id="helpId" class="form-text text-body-secondary">Ingrese el precio del
                                producto</small>
                            @error('precio')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="col-8">
                            <input type="number" class="form-control form-control-sm  @error('stock') is-invalid @enderror"
                                name="stock" id="stock" aria-describedby="helpId" placeholder="Stcok"
                                value="{{ old('stock', $producto->stock ?? '') }}" required />
                            <small id="helpId" class="form-text text-body-secondary">Ingrese el Stock</small>
                            @error('stock')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-envelope-arrow-up-fill"></i>
                            Enviar</button>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>

    </div>
@endsection
