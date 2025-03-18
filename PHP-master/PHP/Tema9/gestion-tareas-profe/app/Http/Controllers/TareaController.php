<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use Illuminate\Support\Facades\Redirect;


class TareaController extends Controller
{
    //Mostrar todas las tareas
    public function index()
    {
        //Obtiene las tareas de la base de datos
        $tareas = Tarea::all();
        //Envia las tareas a la vista
        return view('tareas.index', compact('tareas'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        //Devuelve la vista del formulario de creación
        return view('tareas.create');
    }

    // Guardar nueva tarea en la base de datos
    public function store(Request $request)
    {
        //crea una nueva tarea con los datos recibidos del formulario
        //Tarea::create($request->all());
        Tarea::create([
            'titulo' => $request->titulo,
            'descripcion' =>$request->descripcion
        ]);
        return redirect()->route('tareas.index'); //Redirige a la lista de tareas 
    }


    public function completar($id)
    {
        $tarea = Tarea::find($id);
        $tarea->completada = !$tarea->completada; // = true
        $tarea->save();

        return redirect()->route('tareas.index');
}
}