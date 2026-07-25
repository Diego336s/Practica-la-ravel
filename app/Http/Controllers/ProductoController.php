<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Models\Producto;

class ProductoController extends Controller
{

    public function index()
    {
        $productos = Producto::all();

        return view("productos.index", compact("productos"));
    }

    public function create()
    {
        return view("productos.form");
    }

    public function store(ProductoRequest $request)
    {
        Producto::create($request->validated());

        return redirect()->route("productos.index")->with("success", "Producto creado correctamente.");
    }

    public function destroy(int $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route("productos.index")->with("success", "Producto eliminado correctamente.");
    }

    public function show(int $id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.view', compact('producto'));
    }

    public function edit(int $id)
    {
        $producto = Producto::findOrFail($id);

        return view('productos.form', compact('producto'));
    }

    public function update(ProductoRequest $request, int $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->validated());

        return redirect()->route('productos.index')->with('success', 'Producto actulizado correctamente.');
    }
}
