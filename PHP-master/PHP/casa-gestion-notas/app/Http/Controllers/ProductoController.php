<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        foreach ($productos as $producto) {
            // Compara si la fecha de caducidad es anterior a la fecha actual
            $producto->caducado = $producto->caducidad < date('Y-m-d');
        }
        return view('productos.index', compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }

    public function store(Request $request){

        Producto::create([
            'nombre'=>$request->nombre,
            'precio'=>$request->precio,
            'caducidad'=>$request->caducidad,
        ]);

        return redirect()->route('productos.index');
    }

    public function edit($id){
        $producto = Producto::find($id);
        return view('productos.edit', compact('producto'));
    }
    public function update(Request $request, $id){
        $producto = Producto::find($id);
        $producto->update([
            'precio'=>$request->precio
        ]);
        $producto->save();

        return redirect()->route('productos.index');
    }

    public function delete($id){
        $producto = Producto::find($id);
        $producto->delete();
        return redirect()->route('productos.index');
    }
}
