<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    // Mostrar todas las notas ordenadas por nota descendente
    public function index()
    {
        $notas = Nota::orderBy('nota', 'desc')->get();
        return view('notas.index', compact('notas'));
    }

    // Mostrar formulario para agregar una nota
    public function create()
    {
        return view('notas.create');
    }

    // Guardar una nueva nota
    public function store(Request $request)
    {
        $estado = $request->nota >= 5 ? 'Apto' : 'No Apto';

        Nota::create([
            'nombre' => $request->nombre,
            'asignatura' => $request->asignatura,
            'nota' => $request->nota,
            'estado' => $estado,
        ]);

        return redirect()->route('notas.index');
    }

    // Mostrar detalles de una nota
    public function show($id)
    {
        $nota = Nota::findOrFail($id);
        return view('notas.show', compact('nota'));
    }

    // Eliminar una nota de la base de datos
    public function destroy($id)
    {
        $nota = Nota::findOrFail($id);
        $nota->delete();
        return redirect()->route('notas.index')->with('success', 'Nota eliminada correctamente.');
    }
}