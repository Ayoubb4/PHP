<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;


class tareaController extends Controller
{
    /*  */
    public function index(){
        $tareas = Tarea::all();
        return view('tareas.index', compact('tareas'));
    }
    

    public function create(){
        return view('tareas.create');
    }


    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5'
        ]);
        
        $tarea = Tarea::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'completed' => false, 
        ]);

        return view('tareas.create', [
            'title' => $tarea->title,
            'description' => $tarea->description,
            'completed' => $tarea->completed
        ]);
    }


    public function completar($id){
        $tarea = Tarea::find($id);
        $tarea->completed = true;
        $tarea->save();
    
        return redirect()->route('tareas.index')->with('success', 'Tarea completada correctamente.');
    }
    
}
