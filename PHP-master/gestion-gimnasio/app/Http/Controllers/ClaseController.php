<?php
// filepath: c:\xampp\htdocs\SONIA\PHP-master\gestion-gimnasio\app\Http\Controllers\ClaseController.php
namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::with('profesor')->get();
        return view('classes', compact('clases'));
    }

    public function reserve(Request $request)
    {
        $request->validate([
            'clase_id' => 'required|exists:clases,id',
            'fecha_reserva' => 'required|date',
        ]);

        $reserva = new Reserva();
        $reserva->usuario_id = Auth::id();
        $reserva->clase_id = $request->clase_id;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->save();

        return redirect()->route('classes')->with('success', 'Clase reservada correctamente.');
    }

    public function update(Request $request, $id)
    {
        $clase = Clase::findOrFail($id);
        $clase->nombre = $request->nombre;
        $clase->descripcion = $request->descripcion;

        $clase->save();

        return redirect()->route('admin.classes')->with('success', 'Clase actualizada correctamente.');
    }
} 