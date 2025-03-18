<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index(){
        $notas = Nota::orderBy('nota', 'desc')->get();
        return view('notas.index', compact('notas'));
    }

    public function create(){
        return view('notas.create');
    }

    public function store(Request $request){
        //condicion apto o no
        $estado = $request->nota >= 5 ? "Apto" : "No apto";

        Nota::create([
            'nombre' => $request->nombre,
            'asignatura' => $request->asignatura,
            'nota' => $request->nota,
            'estado' => $estado,
        ]);

        return redirect()->route('notas.index');
    }

    public function show($id){
        $nota = Nota::find($id);
        return view('notas.show', compact('nota'));
    }

    public function delete($id){
        $nota = Nota::find($id);
            $nota->delete();

        return redirect()->route('notas.index');
    }


}
