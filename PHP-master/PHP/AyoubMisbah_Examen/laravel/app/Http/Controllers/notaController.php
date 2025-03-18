<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;
use Resources\Views\notas; // es incorrecto y no es necesario

//el nombre debe ser NotaController
class notaController extends Controller
{
    public function index(){
        //obtienes todas las notas, pero no estás guardando ese resultado en una variable. ($notas)
        //por eso te daba el error compact('notas')
        Nota::all(); 
        Nota::orderBy('id', 'desc');
        return view('notas.index', compact('notas'));
    }
    

    public function create(){
        return view('notas.create');
    }

    public function store(Request $request){
        Nota::create([
            'nombre'=>$request->nombre,
            'asignatura'=>$request->asignatura,
            'nota'=>$request->nota,
            'estado'=>$request->estado,
        ]);
        return redirect()->route('notas.index');
    }

    // no tiene sentido dentro del controlador
    public function estado($nota){
        $apto=Nota::find($nota);
        if ($nota>5) {
            return "Apto";
        }else{
            return "No Apto";
        }
    }

    public function show($id){
        $nota=Nota::find($id);
        $nota->all(); // esta mal esto sobra
        return view('notas.show', compact('notas'));
    }

    public function delete(){ //delete($id)
        // primero buscar la nota     $nota=Nota::find($id);
        Nota::delete();
        Nota::save(); // es innecesario

        return redirect()->route('notas.index');
    }
}
