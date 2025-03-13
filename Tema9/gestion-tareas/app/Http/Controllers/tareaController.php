<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;


class tareaController extends Controller
{
    public function index(){
        /* obtiene las tareas de la bbdd */
        $tareas = Tarea::all();
        /* Envia tareas a la vista */
        return view('tareas.index', compact('tareas'));
    }
    
/* Mostrar formulario de creacion */
    public function create(){
        return view('tareas.create');
    }


    public function store(Request $request){
/* Crea una nueva tarea con los datos recibidos del fomrulario
    Tarea::create($request->all());
*/
        Tarea::create([
            'title' => $request->title,
            'description'=> $request->description
        ]);
//Redirige al usuario a la ruta con el nombre 'tareas.index'.
        return redirect()->route('tareas.index');
    }


    public function completed($id){
        $tarea = Tarea::find($id);
        $tarea->completed = !$tarea->completed;//= true
        $tarea->save();

        return redirect()->route('tareas.index');
    }
    
}
