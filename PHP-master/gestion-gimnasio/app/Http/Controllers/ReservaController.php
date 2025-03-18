<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    public function crearReserva(Request $request)
    {
        $reserva = new Reserva();
        $reserva->usuario_id = Auth::id();
        $reserva->clase_id = $request->clase_id;
        $reserva->fecha_reserva = $request->fecha_reserva;
        $reserva->save();

        return redirect()->back()->with('success', 'Reserva creada con éxito.');
    }

    public function verReservas()
    {
        $reservas = Reserva::where('usuario_id', Auth::id())->get();
        return view('reservas.index', compact('reservas'));
    }

    public function cancelarReserva($id)
    {
        $reserva = Reserva::findOrFail($id);
        if ($reserva->usuario_id !== Auth::id()) {
            return redirect()->back()->with('error', 'No tienes permiso para cancelar esta reserva.');
        }

        $reserva->delete();
        return redirect()->back()->with('success', 'Reserva cancelada con éxito.');
    }
}