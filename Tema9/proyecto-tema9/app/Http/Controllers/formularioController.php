<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formularioController extends Controller
{
    public function mostrarFormulario(){
        return view('formulario');
    }
    public function procesarFormulario(Request $request){
        $request->validate([
            'nombre'=>'required| min :3',
            'email'=>'required|email']);
        return 'Formulario enviado';
    }
}
