<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::orderBy('created_at', 'desc')->get();
        return view('notas.index', compact('notas'));
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request)
    {
        // Calcular el estado según la nota
        $estado = $request->nota > 5 ? 'Apto' : 'No Apto';
    
        // Crear la nueva nota con el estado calculado
        Nota::create([
            'nombre' => $request->nombre,
            'asignatura' => $request->asignatura,
            'nota' => $request->nota,
            'estado' => $estado,  // Aquí se asigna "Apto" o "No Apto"
        ]);
    
        return redirect()->route('notas.index');
    }
    
    public function show($id)
    {
        $nota = Nota::find($id);
        return view('notas.show', compact('nota'));
    }

    public function delete($id)
    {
        $nota = Nota::find($id);
        if ($nota) {
            $nota->delete();
        }
        return redirect()->route('notas.index');
    }
}
